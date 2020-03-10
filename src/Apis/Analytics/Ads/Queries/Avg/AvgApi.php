<?php

namespace BitmovinApiSdk\Apis\Analytics\Ads\Queries\Avg;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class AvgApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AvgApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Avg
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsAvgQueryRequest $adAnalyticsAvgQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AdAnalyticsAvgQueryRequest $adAnalyticsAvgQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        $response = $this->httpWrapper->request('POST', '/analytics/ads/queries/avg', [],  null, $adAnalyticsAvgQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
