<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\Languages;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LanguagesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LanguagesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get AI scene analysis languages by encoding ID
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\SceneAnalysisLanguagesResponse
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\SceneAnalysisLanguagesResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/ai-scene-analysis/analyses/by-encoding-id/{encoding_id}/languages', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SceneAnalysisLanguagesResponse::class);
    }
}
