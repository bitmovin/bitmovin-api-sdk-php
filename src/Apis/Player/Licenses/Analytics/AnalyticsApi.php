<?php

namespace BitmovinApiSdk\Apis\Player\Licenses\Analytics;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class AnalyticsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AnalyticsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Activate Analytics
     *
     * @param string $licenseId
     * @param \BitmovinApiSdk\Models\PlayerLicenseAnalytics $playerLicenseAnalytics
     * @return \BitmovinApiSdk\Models\PlayerLicenseAnalytics
     * @throws BitmovinApiException
     */
    public function create(string $licenseId, \BitmovinApiSdk\Models\PlayerLicenseAnalytics $playerLicenseAnalytics) : \BitmovinApiSdk\Models\PlayerLicenseAnalytics
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];
        $response = $this->httpWrapper->request('POST','/player/licenses/{license_id}/analytics', $pathParams,  null, $playerLicenseAnalytics, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayerLicenseAnalytics::class);
    }

    /**
     * Deactivate Analytics
     *
     * @param string $licenseId
     * @return \BitmovinApiSdk\Models\PlayerLicenseAnalytics
     * @throws BitmovinApiException
     */
    public function delete(string $licenseId) : \BitmovinApiSdk\Models\PlayerLicenseAnalytics
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];
        $response = $this->httpWrapper->request('DELETE','/player/licenses/{license_id}/analytics', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayerLicenseAnalytics::class);
    }
}
