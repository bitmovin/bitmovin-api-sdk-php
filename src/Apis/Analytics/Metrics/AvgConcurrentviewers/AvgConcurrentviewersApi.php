<?php

namespace BitmovinApiSdk\Apis\Analytics\Metrics\AvgConcurrentviewers;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class AvgConcurrentviewersApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AvgConcurrentviewersApi constructor.
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
     * @return \BitmovinApiSdk\Models\AnalyticsAvgConcurrentViewersResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsMetricsQueryRequest $analyticsMetricsQueryRequest) : \BitmovinApiSdk\Models\AnalyticsAvgConcurrentViewersResponse
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/metrics/avg-concurrentviewers', [],  null, $analyticsMetricsQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAvgConcurrentViewersResponse::class);
    }
}
