<?php

namespace BitmovinApiSdk\Apis\Analytics\Queries\Min;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class MinApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * MinApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Min
     *
     * @param \BitmovinApiSdk\Models\AnalyticsMinQueryRequest $analyticsMinQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsMinQueryRequest $analyticsMinQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/queries/min', [],  null, $analyticsMinQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
