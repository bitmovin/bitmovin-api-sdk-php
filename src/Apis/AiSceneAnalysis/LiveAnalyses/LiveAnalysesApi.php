<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\LiveAnalyses;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\AiSceneAnalysis\LiveAnalyses\Results\ResultsApi;

class LiveAnalysesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ResultsApi */
    public $results;

    /**
     * LiveAnalysesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->results = new ResultsApi(null, $this->httpWrapper);
    }

    /**
     * Create Live Analysis
     *
     * @param \BitmovinApiSdk\Models\AiSceneAnalysisLiveCreateRequest $aiSceneAnalysisLiveCreateRequest
     * @return \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AiSceneAnalysisLiveCreateRequest $aiSceneAnalysisLiveCreateRequest) : \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse
    {
        $response = $this->httpWrapper->request('POST', '/ai-scene-analysis/live-analyses', [],  null, $aiSceneAnalysisLiveCreateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse::class);
    }

    /**
     * Delete Live Analysis
     *
     * @param string $analysisId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $analysisId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'analysis_id' => $analysisId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/ai-scene-analysis/live-analyses/{analysis_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Live Analysis details
     *
     * @param string $analysisId
     * @return \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse
     * @throws BitmovinApiException
     */
    public function get(string $analysisId) : \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse
    {
        $pathParams = [
            'analysis_id' => $analysisId,
        ];

        $response = $this->httpWrapper->request('GET', '/ai-scene-analysis/live-analyses/{analysis_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse::class);
    }

    /**
     * List Live Analyses
     *
     * @param AiSceneAnalysisLiveResponseListQueryParams|null $queryParams
     * @return AiSceneAnalysisLiveResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AiSceneAnalysisLiveResponseListQueryParams $queryParams = null) : AiSceneAnalysisLiveResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/ai-scene-analysis/live-analyses', [], $queryParams, null, true);

        return ObjectMapper::map($response, AiSceneAnalysisLiveResponsePaginationResponse::class);
    }

    /**
     * Start Live Analysis
     *
     * @param string $analysisId
     * @return \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse
     * @throws BitmovinApiException
     */
    public function start(string $analysisId) : \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse
    {
        $pathParams = [
            'analysis_id' => $analysisId,
        ];

        $response = $this->httpWrapper->request('POST', '/ai-scene-analysis/live-analyses/{analysis_id}/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse::class);
    }

    /**
     * Stop Live Analysis
     *
     * @param string $analysisId
     * @return \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse
     * @throws BitmovinApiException
     */
    public function stop(string $analysisId) : \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse
    {
        $pathParams = [
            'analysis_id' => $analysisId,
        ];

        $response = $this->httpWrapper->request('POST', '/ai-scene-analysis/live-analyses/{analysis_id}/stop', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse::class);
    }
}
