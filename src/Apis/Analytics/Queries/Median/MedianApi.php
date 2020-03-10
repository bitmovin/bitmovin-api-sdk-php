<?php

namespace BitmovinApiSdk\Apis\Analytics\Queries\Median;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class MedianApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * MedianApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Median
     *
     * @param \BitmovinApiSdk\Models\AnalyticsMedianQueryRequest $analyticsMedianQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsMedianQueryRequest $analyticsMedianQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        $response = $this->httpWrapper->request('POST', '/analytics/queries/median', [],  null, $analyticsMedianQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
