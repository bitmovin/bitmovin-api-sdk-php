<?php

namespace BitmovinApiSdk\Apis\Streams\Config\DomainRestriction;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class DomainRestrictionApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DomainRestrictionApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create new streams domain restriction
     *
     * @param \BitmovinApiSdk\Models\StreamsDomainRestrictionCreateRequest $streamsDomainRestrictionCreateRequest
     * @return \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\StreamsDomainRestrictionCreateRequest $streamsDomainRestrictionCreateRequest) : \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse
    {
        $response = $this->httpWrapper->request('POST', '/streams/config/domain-restriction/', [],  null, $streamsDomainRestrictionCreateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse::class);
    }

    /**
     * Delete streams domain restriction by id
     *
     * @param string $domainRestrictionId
     * @throws BitmovinApiException
     */
    public function delete(string $domainRestrictionId)
    {
        $pathParams = [
            'domain_restriction_id' => $domainRestrictionId,
        ];

        $this->httpWrapper->request('DELETE', '/streams/config/domain-restriction/{domain_restriction_id}', $pathParams,  null, null, false);
    }

    /**
     * Get streams domain restriction config by id
     *
     * @param string $domainRestrictionId
     * @return \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse
     * @throws BitmovinApiException
     */
    public function get(string $domainRestrictionId) : \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse
    {
        $pathParams = [
            'domain_restriction_id' => $domainRestrictionId,
        ];

        $response = $this->httpWrapper->request('GET', '/streams/config/domain-restriction/{domain_restriction_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse::class);
    }

    /**
     * Get paginated list of domain restriction configurations
     *
     * @param StreamsDomainRestrictionResponseListQueryParams|null $queryParams
     * @return StreamsDomainRestrictionResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(StreamsDomainRestrictionResponseListQueryParams $queryParams = null) : StreamsDomainRestrictionResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/streams/config/domain-restriction/', [], $queryParams, null, true);

        return ObjectMapper::map($response, StreamsDomainRestrictionResponsePaginationResponse::class);
    }

    /**
     * Partially update streams domain restriction by id
     *
     * @param string $domainRestrictionId
     * @param \BitmovinApiSdk\Models\StreamsDomainRestrictionUpdateRequest $streamsDomainRestrictionUpdateRequest
     * @return \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse
     * @throws BitmovinApiException
     */
    public function patchStreamsDomainRestriction(string $domainRestrictionId, \BitmovinApiSdk\Models\StreamsDomainRestrictionUpdateRequest $streamsDomainRestrictionUpdateRequest) : \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse
    {
        $pathParams = [
            'domain_restriction_id' => $domainRestrictionId,
        ];

        $response = $this->httpWrapper->request('PATCH', '/streams/config/domain-restriction/{domain_restriction_id}', $pathParams,  null, $streamsDomainRestrictionUpdateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse::class);
    }
}
