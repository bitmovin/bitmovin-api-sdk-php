<?php

namespace BitmovinApiSdk\Apis\Analytics\VirtualLicenses;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class VirtualLicensesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VirtualLicensesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Analytics Virtual License
     *
     * @param \BitmovinApiSdk\Models\AnalyticsVirtualLicenseRequest $analyticsVirtualLicenseRequest
     * @return \BitmovinApiSdk\Models\AnalyticsVirtualLicense
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsVirtualLicenseRequest $analyticsVirtualLicenseRequest) : \BitmovinApiSdk\Models\AnalyticsVirtualLicense
    {
        $response = $this->httpWrapper->request('POST', '/analytics/virtual-licenses', [],  null, $analyticsVirtualLicenseRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsVirtualLicense::class);
    }

    /**
     * Delete Analytics Virtual License
     *
     * @param string $virtualLicenseId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $virtualLicenseId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'virtual_license_id' => $virtualLicenseId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/analytics/virtual-licenses/{virtual_license_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * List Analytics Virtual Licenses
     *
     * @param AnalyticsVirtualLicenseListQueryParams|null $queryParams
     * @return AnalyticsVirtualLicensePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AnalyticsVirtualLicenseListQueryParams $queryParams = null) : AnalyticsVirtualLicensePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/analytics/virtual-licenses', [], $queryParams, null, true);

        return ObjectMapper::map($response, AnalyticsVirtualLicensePaginationResponse::class);
    }

    /**
     * Update Analytics Virtual License
     *
     * @param string $virtualLicenseId
     * @param \BitmovinApiSdk\Models\AnalyticsVirtualLicenseRequest $analyticsVirtualLicenseRequest
     * @return \BitmovinApiSdk\Models\AnalyticsVirtualLicense
     * @throws BitmovinApiException
     */
    public function update(string $virtualLicenseId, \BitmovinApiSdk\Models\AnalyticsVirtualLicenseRequest $analyticsVirtualLicenseRequest) : \BitmovinApiSdk\Models\AnalyticsVirtualLicense
    {
        $pathParams = [
            'virtual_license_id' => $virtualLicenseId,
        ];

        $response = $this->httpWrapper->request('PUT', '/analytics/virtual-licenses/{virtual_license_id}', $pathParams,  null, $analyticsVirtualLicenseRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsVirtualLicense::class);
    }
}
