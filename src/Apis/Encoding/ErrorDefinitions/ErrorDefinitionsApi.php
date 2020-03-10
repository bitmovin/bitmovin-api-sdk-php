<?php

namespace BitmovinApiSdk\Apis\Encoding\ErrorDefinitions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ErrorDefinitionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ErrorDefinitionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List all possible encoding error definitions
     *
     * @param EncodingErrorDefinitionListQueryParams|null $queryParams
     * @return EncodingErrorDefinitionPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EncodingErrorDefinitionListQueryParams $queryParams = null) : EncodingErrorDefinitionPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/error-definitions', [], $queryParams, null, true);

        return ObjectMapper::map($response, EncodingErrorDefinitionPaginationResponse::class);
    }
}
