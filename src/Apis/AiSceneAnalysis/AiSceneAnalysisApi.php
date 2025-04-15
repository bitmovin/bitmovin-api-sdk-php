<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\AnalysesApi;

class AiSceneAnalysisApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AnalysesApi */
    public $analyses;

    /**
     * AiSceneAnalysisApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->analyses = new AnalysesApi(null, $this->httpWrapper);
    }
}
