<?php

namespace BitmovinApiSdk\Common\Middleware;

use Closure;
use Psr\Http\Message\RequestInterface;

class CustomApiHeaders
{
    /** @var string */
    private $X_API_CLIENT_CONFIGURATION_KEY = "x-api-client";

    /** @var string */
    private $X_API_CLIENT = "bitmovin-java-api";

    /** @var string */
    private $apiKey;

    /** @var array */
    private $headers;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'X-Api-Key' => $this->apiKey,
            'X-Api-Client' => $this->X_API_CLIENT,
            'X-Api-Client-Version' => $this->X_API_CLIENT_CONFIGURATION_KEY,
        ];
    }

    /**
     * Add custom headers to Guzzle client
     * @param callable $handler
     * @return Closure
     */
    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            foreach ($this->headers as $headerName => $headerValue) {
                $request = $request->withHeader($headerName, $headerValue);
            }

            return $handler($request, $options);
        };
    }
}
