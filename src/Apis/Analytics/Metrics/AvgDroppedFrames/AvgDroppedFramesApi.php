<?php

namespace BitmovinApiSdk\Apis\Analytics\Metrics\AvgDroppedFrames;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class AvgDroppedFramesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AvgDroppedFramesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get metrics data
     *
     * @param \BitmovinApiSdk\Models\AnalyticsMetricsQueryRequest $analyticsMetricsQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsAvgDroppedFramesResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsMetricsQueryRequest $analyticsMetricsQueryRequest) : \BitmovinApiSdk\Models\AnalyticsAvgDroppedFramesResponse
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/metrics/avg-dropped-frames', [],  null, $analyticsMetricsQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAvgDroppedFramesResponse::class);
    }
}
