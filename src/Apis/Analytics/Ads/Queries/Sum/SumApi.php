<?php

namespace BitmovinApiSdk\Apis\Analytics\Ads\Queries\Sum;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SumApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SumApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Sum
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsSumQueryRequest $adAnalyticsSumQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AdAnalyticsSumQueryRequest $adAnalyticsSumQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        $response = $this->httpWrapper->request('POST', '/analytics/ads/queries/sum', [],  null, $adAnalyticsSumQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
