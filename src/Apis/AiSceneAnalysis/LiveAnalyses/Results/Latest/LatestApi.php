<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\LiveAnalyses\Results\Latest;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LatestApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LatestApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get Live Analysis Latest Result
     *
     * @param string $analysisId
     * @return \BitmovinApiSdk\Models\AiSceneAnalysisLiveResult
     * @throws BitmovinApiException
     */
    public function get(string $analysisId) : \BitmovinApiSdk\Models\AiSceneAnalysisLiveResult
    {
        $pathParams = [
            'analysis_id' => $analysisId,
        ];

        $response = $this->httpWrapper->request('GET', '/ai-scene-analysis/live-analyses/{analysis_id}/results/latest', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AiSceneAnalysisLiveResult::class);
    }
}
