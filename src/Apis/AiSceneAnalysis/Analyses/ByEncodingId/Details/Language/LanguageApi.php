<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\Details\Language;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LanguageApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LanguageApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get translated AI scene analysis details by encoding ID and language code
     *
     * @param string $encodingId
     * @param string $languageCode
     * @return \BitmovinApiSdk\Models\SceneAnalysisDetailsResponse
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $languageCode) : \BitmovinApiSdk\Models\SceneAnalysisDetailsResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'language_code' => $languageCode,
        ];

        $response = $this->httpWrapper->request('GET', '/ai-scene-analysis/analyses/by-encoding-id/{encoding_id}/details/language/{language_code}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SceneAnalysisDetailsResponse::class);
    }
}
