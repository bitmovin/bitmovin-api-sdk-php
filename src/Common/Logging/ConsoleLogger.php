<?php

namespace BitmovinApiSdk\Common\Logging;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ConsoleLogger implements BitmovinLoggerInterface
{
    function logRequest(RequestInterface $request)
    {
        printf("Request: %s %s%s", $request->getMethod(), $request->getUri()->getPath(), PHP_EOL);

        $requestBody = $request->getBody()->getContents();
        if ($requestBody !== "") {
            printf("Request Body: %s%s", $requestBody, PHP_EOL);
        }

        $request->getBody()->rewind();
    }

    function logResponse(ResponseInterface $response)
    {
        printf("Response: %d%s", $response->getStatusCode(), PHP_EOL);

        $responseBody = $response->getBody()->getContents();
        if ($responseBody !== "") {
            printf("Response Body: %s%s", $responseBody, PHP_EOL);
        }

        $response->getBody()->rewind();
    }
}
