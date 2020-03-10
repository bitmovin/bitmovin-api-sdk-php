<?php

namespace BitmovinApiSdk\Apis\Analytics\Metrics\MaxConcurrentviewers;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class MaxConcurrentviewersApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * MaxConcurrentviewersApi constructor.
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
     * @return \BitmovinApiSdk\Models\AnalyticsMaxConcurrentViewersResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsMetricsQueryRequest $analyticsMetricsQueryRequest) : \BitmovinApiSdk\Models\AnalyticsMaxConcurrentViewersResponse
    {
        $response = $this->httpWrapper->request('POST', '/analytics/metrics/max-concurrentviewers', [],  null, $analyticsMetricsQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsMaxConcurrentViewersResponse::class);
    }
}
