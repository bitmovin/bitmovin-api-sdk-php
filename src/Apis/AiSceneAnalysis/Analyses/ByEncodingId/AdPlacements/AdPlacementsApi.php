<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses\ByEncodingId\AdPlacements;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class AdPlacementsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AdPlacementsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get AI scene analysis ad placements by encoding ID
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\SceneAnalysisAdPlacementMetadataResponse
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\SceneAnalysisAdPlacementMetadataResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/ai-scene-analysis/analyses/by-encoding-id/{encoding_id}/ad-placements', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SceneAnalysisAdPlacementMetadataResponse::class);
    }
}
