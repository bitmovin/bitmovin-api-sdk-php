<?php

namespace BitmovinApiSdk\Apis\Player\CustomBuilds\Web\Domains;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class DomainsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DomainsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Domain
     *
     * @param \BitmovinApiSdk\Models\CustomWebPlayerBuildDomain $customWebPlayerBuildDomain
     * @return \BitmovinApiSdk\Models\CustomWebPlayerBuildDomain
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\CustomWebPlayerBuildDomain $customWebPlayerBuildDomain) : \BitmovinApiSdk\Models\CustomWebPlayerBuildDomain
    {
        $response = $this->httpWrapper->request('POST', '/player/custom-builds/web/domains', [],  null, $customWebPlayerBuildDomain, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomWebPlayerBuildDomain::class);
    }

    /**
     * Delete Domain
     *
     * @param string $domainId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $domainId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'domain_id' => $domainId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/player/custom-builds/web/domains/{domain_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Domain Details
     *
     * @param string $domainId
     * @return \BitmovinApiSdk\Models\CustomWebPlayerBuildDomain
     * @throws BitmovinApiException
     */
    public function get(string $domainId) : \BitmovinApiSdk\Models\CustomWebPlayerBuildDomain
    {
        $pathParams = [
            'domain_id' => $domainId,
        ];

        $response = $this->httpWrapper->request('GET', '/player/custom-builds/web/domains/{domain_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomWebPlayerBuildDomain::class);
    }

    /**
     * List Domain Details
     *
     * @return CustomWebPlayerBuildDomainPaginationResponse
     * @throws BitmovinApiException
     */
    public function list() : CustomWebPlayerBuildDomainPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/player/custom-builds/web/domains', [],  null, null, true);

        return ObjectMapper::map($response, CustomWebPlayerBuildDomainPaginationResponse::class);
    }
}
