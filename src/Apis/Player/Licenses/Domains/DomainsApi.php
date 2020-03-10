<?php

namespace BitmovinApiSdk\Apis\Player\Licenses\Domains;

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
     * @param string $licenseId
     * @param \BitmovinApiSdk\Models\Domain $domain
     * @return \BitmovinApiSdk\Models\Domain
     * @throws BitmovinApiException
     */
    public function create(string $licenseId, \BitmovinApiSdk\Models\Domain $domain) : \BitmovinApiSdk\Models\Domain
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];

        $response = $this->httpWrapper->request('POST', '/player/licenses/{license_id}/domains', $pathParams,  null, $domain, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Domain::class);
    }

    /**
     * Delete Domain
     *
     * @param string $licenseId
     * @param string $domainId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $licenseId, string $domainId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'license_id' => $licenseId,
            'domain_id' => $domainId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/player/licenses/{license_id}/domains/{domain_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * List allowed Domains for Player License
     *
     * @param string $licenseId
     * @return DomainPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $licenseId) : DomainPaginationResponse
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];

        $response = $this->httpWrapper->request('GET', '/player/licenses/{license_id}/domains', $pathParams,  null, null, true);

        return ObjectMapper::map($response, DomainPaginationResponse::class);
    }
}
