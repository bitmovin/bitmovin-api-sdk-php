<?php

namespace BitmovinApiSdk\Apis\General\ErrorDefinitions;

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
     * List all possible api error definitions
     *
     * @param ApiErrorDefinitionListQueryParams|null $queryParams
     * @return ApiErrorDefinitionPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(ApiErrorDefinitionListQueryParams $queryParams = null) : ApiErrorDefinitionPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/general/error-definitions', [], $queryParams, null, true);

        return ObjectMapper::map($response, ApiErrorDefinitionPaginationResponse::class);
    }
}
