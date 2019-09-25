<?php

namespace BitmovinApiSdk\Apis\Analytics\Queries\Max;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class MaxApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * MaxApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Max
     *
     * @param \BitmovinApiSdk\Models\AnalyticsMaxQueryRequest $analyticsMaxQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsMaxQueryRequest $analyticsMaxQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/queries/max', [],  null, $analyticsMaxQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
