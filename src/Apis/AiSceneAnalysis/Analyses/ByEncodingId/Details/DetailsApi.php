<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\Details;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\Details\Language\LanguageApi;

class DetailsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var LanguageApi */
    public $language;

    /**
     * DetailsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->language = new LanguageApi(null, $this->httpWrapper);
    }

    /**
     * Get AI Scene Analysis details
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\SceneAnalysisDetailsResponse
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\SceneAnalysisDetailsResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/ai-scene-analysis/analyses/by-encoding-id/{encoding_id}/details', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SceneAnalysisDetailsResponse::class);
    }
}
