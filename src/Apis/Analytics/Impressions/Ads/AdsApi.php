<?php

namespace BitmovinApiSdk\Apis\Analytics\Impressions\Ads;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class AdsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AdsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Ads Impressions
     *
     * @param string $impressionId
     * @param \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey
     * @return \BitmovinApiSdk\Models\AnalyticsAdsImpressionsResponse
     * @throws BitmovinApiException
     */
    public function create(string $impressionId, \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey) : \BitmovinApiSdk\Models\AnalyticsAdsImpressionsResponse
    {
        $pathParams = [
            'impression_id' => $impressionId,
        ];

        $response = $this->httpWrapper->request('POST', '/analytics/impressions/{impression_id}/ads', $pathParams,  null, $analyticsLicenseKey, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAdsImpressionsResponse::class);
    }
}
