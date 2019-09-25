<?php

namespace BitmovinApiSdk\Common;

use stdClass;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\ClientInterface;

use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\Middleware\CustomApiHeaders;

class HttpWrapper
{
    /** @var string */
    private $baseUrl;

    /** @var string */
    private $apiKey;

    /** @var ClientInterface */
    protected $httpClient;

    /** @var LoggerInterface */
    private $logger;

    /**
     * HttpWrapper constructor.
     *
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->apiKey = $config->apiKey;
        $this->baseUrl = $config->baseUrl;
        $this->logger = $config->logger;

        if ($config->httpClient) {
            $this->httpClient = $config->httpClient;
        } else {
            $stack = HandlerStack::create();
            $stack->push(new CustomApiHeaders($this->apiKey));

            $this->httpClient = new Client([
                'base_uri' => $this->baseUrl,
                'http_errors' => false,
                'handler' => $stack,
            ]);
        }
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array $pathParams
     * @param QueryParams|null $queryParams
     * @param mixed $body
     * @param bool $deserializeResponse
     * @return mixed|void
     * @throws BitmovinApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(
        string $method,
        string $endpoint,
        array $pathParams = [],
        QueryParams $queryParams = null,
        $body = [],
        bool $deserializeResponse = true
    ) {
        $endpoint = $this->createEndpointFromPlaceholders($pathParams, $endpoint);
        $options = [];

        if ($queryParams) {
            $options = ['query' => $queryParams->toArray()];
        } elseif ($body) {
            $bodyJson = $body;

            if($body instanceof ApiResource)
            {
                $bodyJson = $body->toArray();
            }

            $options = ['json' => $bodyJson];
        }

        $this->logRequestIfEnabled($method, $endpoint, $options);

        $arguments = [$method, $endpoint];

        if (isset($options)) {
            $arguments[] = $options;
        }

        $response = $this->httpClient->request(...$arguments);

        $responseBody = $response->getBody();
        $statusCode = $response->getStatusCode();
        $this->throwExceptionForHttpStatusCode($statusCode, $responseBody);
        $this->logResponseIfEnabled($responseBody);

        if(!$deserializeResponse)
        {
            return;
        }

        $result = json_decode($responseBody);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new BitmovinApiException($statusCode, 'There was a problem while trying to decode the JSON response.',
                '', ['responseBody' => $responseBody]);
        }

        return $result->data->result;
    }

    /**
     * @param int $statusCode
     * @param string $responseBody
     * @throws BitmovinApiException
     */
    private function throwExceptionForHttpStatusCode(int $statusCode, string $responseBody)
    {
        if ($statusCode > 299) {
            $response = json_decode($responseBody);
            $message = $response->data->message ?? $response->message ?? '';
            $developerMessage = $response->data->developerMessage ?? '';
            $details = $response->data->details ?? [];

            throw new BitmovinApiException($statusCode, $message, $developerMessage, $details);
        }
    }

    /**
     * @param array $placeHolders
     * @param string $endpoint
     * @return mixed
     */
    private function createEndpointFromPlaceholders(array $placeHolders, string $endpoint)
    {
        array_walk($placeHolders, function ($value, $key) use (&$endpoint) {
            $endpoint = str_replace("{" . $key . "}", $value, $endpoint);
        });

        return $endpoint = $this->baseUrl . $endpoint;
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array $options
     */
    private function logRequestIfEnabled(string $method, string $endpoint, array $options)
    {
        if ($this->logger) {
            $this->logger->info('Bitmovin Request - Outgoing '.$method.' request to '.$endpoint, $options);
        }
    }

    /**
     * @param string $responseBody
     */
    private function logResponseIfEnabled(string $responseBody)
    {
        if ($this->logger) {
            $this->logger->info('Bitmovin Request Response: '.$responseBody);
        }
    }

}
