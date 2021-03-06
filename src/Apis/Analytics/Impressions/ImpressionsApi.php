<?php

namespace BitmovinApiSdk\Apis\Analytics\Impressions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Impressions\Ads\AdsApi;

class ImpressionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AdsApi */
    public $ads;

    /**
     * ImpressionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->ads = new AdsApi(null, $this->httpWrapper);
    }

    /**
     * Impression Details
     *
     * @param string $impressionId
     * @param \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey
     * @return \BitmovinApiSdk\Models\AnalyticsImpressionDetails
     * @throws BitmovinApiException
     */
    public function create(string $impressionId, \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey) : \BitmovinApiSdk\Models\AnalyticsImpressionDetails
    {
        $pathParams = [
            'impression_id' => $impressionId,
        ];

        $response = $this->httpWrapper->request('POST', '/analytics/impressions/{impression_id}', $pathParams,  null, $analyticsLicenseKey, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsImpressionDetails::class);
    }

    /**
     * List impressions
     *
     * @param \BitmovinApiSdk\Models\AnalyticsImpressionsQuery $analyticsImpressionsQuery
     * @return \BitmovinApiSdk\Models\AnalyticsImpressionsResponse
     * @throws BitmovinApiException
     */
    public function getImpressions(\BitmovinApiSdk\Models\AnalyticsImpressionsQuery $analyticsImpressionsQuery) : \BitmovinApiSdk\Models\AnalyticsImpressionsResponse
    {
        $response = $this->httpWrapper->request('POST', '/analytics/impressions', [],  null, $analyticsImpressionsQuery, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsImpressionsResponse::class);
    }
}
