<?php

namespace BitmovinApiSdk\Apis\Analytics\Ads\Queries\Percentile;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class PercentileApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * PercentileApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Percentile
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsPercentileQueryRequest $adAnalyticsPercentileQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AdAnalyticsPercentileQueryRequest $adAnalyticsPercentileQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/ads/queries/percentile', [],  null, $adAnalyticsPercentileQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
