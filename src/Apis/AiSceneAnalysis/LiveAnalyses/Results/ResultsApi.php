<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\LiveAnalyses\Results;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\AiSceneAnalysis\LiveAnalyses\Results\Latest\LatestApi;

class ResultsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var LatestApi */
    public $latest;

    /**
     * ResultsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->latest = new LatestApi(null, $this->httpWrapper);
    }
}
