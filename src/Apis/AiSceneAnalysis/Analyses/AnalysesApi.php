<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\ByEncodingIdApi;

class AnalysesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ByEncodingIdApi */
    public $byEncodingId;

    /**
     * AnalysesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->byEncodingId = new ByEncodingIdApi(null, $this->httpWrapper);
    }
}
