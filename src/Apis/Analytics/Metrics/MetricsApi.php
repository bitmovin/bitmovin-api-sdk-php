<?php

namespace BitmovinApiSdk\Apis\Analytics\Metrics;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Metrics\MaxConcurrentviewers\MaxConcurrentviewersApi;
use BitmovinApiSdk\Apis\Analytics\Metrics\AvgConcurrentviewers\AvgConcurrentviewersApi;
use BitmovinApiSdk\Apis\Analytics\Metrics\AvgDroppedFrames\AvgDroppedFramesApi;

class MetricsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var MaxConcurrentviewersApi */
    public $maxConcurrentviewers;

    /** @var AvgConcurrentviewersApi */
    public $avgConcurrentviewers;

    /** @var AvgDroppedFramesApi */
    public $avgDroppedFrames;

    /**
     * MetricsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->maxConcurrentviewers = new MaxConcurrentviewersApi(null, $this->httpWrapper);
        $this->avgConcurrentviewers = new AvgConcurrentviewersApi(null, $this->httpWrapper);
        $this->avgDroppedFrames = new AvgDroppedFramesApi(null, $this->httpWrapper);
    }
}
