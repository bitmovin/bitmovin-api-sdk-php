<?php

namespace BitmovinApiSdk\Common;

use stdClass;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\ClientInterface;

use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\Middleware\CustomApiHeaders;
use BitmovinApiSdk\Common\Middleware\ErrorHandler;
use BitmovinApiSdk\Common\Middleware\LoggingHandler;

class HttpWrapper
{
    /** @var string */
    private $baseUrl;

    /** @var ClientInterface */
    protected $httpClient;

    /**
     * HttpWrapper constructor.
     *
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->baseUrl = $config->baseUrl;

        if ($config->httpClient) {
            $this->httpClient = $config->httpClient;
        } else {
            $stack = HandlerStack::create();

            $stack->push(new CustomApiHeaders($config->apiKey, $config->tenantOrgId));
            $stack->push(new ErrorHandler());

            if ($config->logger !== null) {
                $stack->push(new LoggingHandler($config->logger));
            }

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

            if ($body instanceof ApiResource) {
                $bodyJson = $body->toArray();
            }

            $options = ['json' => $bodyJson];
        }

        $arguments = [$method, $endpoint];

        if (isset($options)) {
            $arguments[] = $options;
        }

        $response = $this->httpClient->request(...$arguments);

        $responseBody = $response->getBody();
        $result = json_decode($responseBody);

        if (!$deserializeResponse) {
            return;
        }

        return $result->data->result;
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
}
