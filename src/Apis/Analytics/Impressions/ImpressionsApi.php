<?php

namespace BitmovinApiSdk\Apis\Analytics\Impressions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Impressions\Ads\AdsApi;
use BitmovinApiSdk\Apis\Analytics\Impressions\Errors\ErrorsApi;

class ImpressionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AdsApi */
    public $ads;

    /** @var ErrorsApi */
    public $errors;

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
        $this->errors = new ErrorsApi(null, $this->httpWrapper);
    }

    /**
     * Impression Details
     *
     * @param string $impressionId
     * @param \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey
     * @return \BitmovinApiSdk\Models\AnalyticsImpressionSample[]
     * @throws BitmovinApiException
     */
    public function create(string $impressionId, \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey) : array
    {
        $pathParams = [
            'impression_id' => $impressionId,
        ];

        $response = $this->httpWrapper->request('POST', '/analytics/impressions/{impression_id}', $pathParams,  null, $analyticsLicenseKey, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsImpressionSample::class);
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
