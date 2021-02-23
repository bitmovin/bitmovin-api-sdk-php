<?php

namespace BitmovinApiSdk\Common\Middleware;

use Closure;
use Psr\Http\Message\RequestInterface;

class CustomApiHeaders
{
    /** @var array */
    private $headers;

    public function __construct(string $apiKey, ?string $tenantOrgId)
    {
        $this->headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'X-Api-Key' => $apiKey,
            'X-Api-Client' => 'bitmovin-api-sdk-php',
            'X-Api-Client-Version' => '1.60.0',
        ];

        if ($tenantOrgId !== null) {
            $this->headers['X-Tenant-Org-Id'] = $tenantOrgId;
        }
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
