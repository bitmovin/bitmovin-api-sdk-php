<?php

namespace BitmovinApiSdk\Apis\Analytics\Queries\Sum;

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
     * @param \BitmovinApiSdk\Models\AnalyticsSumQueryRequest $analyticsSumQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsSumQueryRequest $analyticsSumQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        $response = $this->httpWrapper->request('POST', '/analytics/queries/sum', [],  null, $analyticsSumQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
