<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\DnsMappings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class DnsMappingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DnsMappingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List DNS Mappings
     *
     * @param DnsMappingResponseListQueryParams|null $queryParams
     * @return DnsMappingResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DnsMappingResponseListQueryParams $queryParams = null) : DnsMappingResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/live/dns-mappings', [], $queryParams, null, true);

        return ObjectMapper::map($response, DnsMappingResponsePaginationResponse::class);
    }
}
