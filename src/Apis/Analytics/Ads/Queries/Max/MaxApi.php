<?php

namespace BitmovinApiSdk\Apis\Analytics\Ads\Queries\Max;

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
     * @param \BitmovinApiSdk\Models\AdAnalyticsMaxQueryRequest $adAnalyticsMaxQueryRequest
     * @return \BitmovinApiSdk\Models\AnalyticsResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AdAnalyticsMaxQueryRequest $adAnalyticsMaxQueryRequest) : \BitmovinApiSdk\Models\AnalyticsResponse
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/ads/queries/max', [],  null, $adAnalyticsMaxQueryRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsResponse::class);
    }
}
