<?php

namespace BitmovinApiSdk\Apis\Analytics\Licenses;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Licenses\Domains\DomainsApi;

class LicensesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DomainsApi */
    public $domains;

    /**
     * LicensesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->domains = new DomainsApi(null, $this->httpWrapper);
    }

    /**
     * Create Analytics License
     *
     * @param \BitmovinApiSdk\Models\AnalyticsLicense $analyticsLicense
     * @return \BitmovinApiSdk\Models\AnalyticsLicense
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsLicense $analyticsLicense) : \BitmovinApiSdk\Models\AnalyticsLicense
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/licenses', [],  null, $analyticsLicense, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsLicense::class);
    }

    /**
     * Get License
     *
     * @param string $licenseId
     * @return \BitmovinApiSdk\Models\AnalyticsLicense
     * @throws BitmovinApiException
     */
    public function get(string $licenseId) : \BitmovinApiSdk\Models\AnalyticsLicense
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];
        $response = $this->httpWrapper->request('GET','/analytics/licenses/{license_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsLicense::class);
    }

    /**
     * List Analytics Licenses
     *
     * @return AnalyticsLicensePaginationResponse
     * @throws BitmovinApiException
     */
    public function list() : AnalyticsLicensePaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/analytics/licenses', [],  null, null, true);

        return ObjectMapper::map($response, AnalyticsLicensePaginationResponse::class);
    }

    /**
     * Update Analytics License
     *
     * @param string $licenseId
     * @param \BitmovinApiSdk\Models\AnalyticsLicenseUpdateRequest $analyticsLicenseUpdateRequest
     * @return \BitmovinApiSdk\Models\AnalyticsLicense
     * @throws BitmovinApiException
     */
    public function update(string $licenseId, \BitmovinApiSdk\Models\AnalyticsLicenseUpdateRequest $analyticsLicenseUpdateRequest) : \BitmovinApiSdk\Models\AnalyticsLicense
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];
        $response = $this->httpWrapper->request('PUT','/analytics/licenses/{license_id}', $pathParams,  null, $analyticsLicenseUpdateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsLicense::class);
    }
}
