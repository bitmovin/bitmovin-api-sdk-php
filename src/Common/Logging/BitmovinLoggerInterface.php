<?php

namespace BitmovinApiSdk\Common\Logging;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface BitmovinLoggerInterface
{
    function logRequest(RequestInterface $request);
    function logResponse(ResponseInterface $response);
}
