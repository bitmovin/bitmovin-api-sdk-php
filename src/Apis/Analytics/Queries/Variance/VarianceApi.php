<?php

namespace BitmovinApiSdk\Apis\Analytics\Queries\Variance;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class VarianceApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VarianceApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Variance
     *
     * @param \BitmovinApiSdk\Models\AnalyticsVarianceQueryRequest $analyticsVarianceQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsVarianceQueryRequest $analyticsVarianceQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        $response = $this->httpWrapper->request('POST', '/analytics/queries/variance', [],  null, $analyticsVarianceQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
