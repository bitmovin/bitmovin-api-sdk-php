<?php

namespace BitmovinApiSdk\Common\Middleware;

use BitmovinApiSdk\Common\Logging\BitmovinLoggerInterface;
use Closure;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class LoggingHandler
{
    /**
     * @var BitmovinLoggerInterface
     */
    private $logger;

    public function __construct(BitmovinLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Add logging handling to Guzzle client
     * @param callable $handler
     * @return Closure
     */
    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            $this->logger->logRequest($request);

            $promise = $handler($request, $options);

            return $promise->then(function (ResponseInterface $response) use ($handler, $request, $options) {
                $this->logger->logResponse($response);
                return $response;
            });
        };
    }
}
