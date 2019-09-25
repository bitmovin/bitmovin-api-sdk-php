<?php

namespace BitmovinApiSdk\Apis\Analytics\Queries\Stddev;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class StddevApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StddevApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Stddev
     *
     * @param \BitmovinApiSdk\Models\AnalyticsStddevQueryRequest $analyticsStddevQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsStddevQueryRequest $analyticsStddevQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/queries/stddev', [],  null, $analyticsStddevQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
