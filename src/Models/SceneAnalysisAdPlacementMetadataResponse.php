<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SceneAnalysisAdPlacementMetadataResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AdPosition[] */
    public $placedAds;

    /** @var \BitmovinApiSdk\Models\AiSceneAnalysisAutomaticAdPlacement */
    public $automaticAdPlacement;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->placedAds = ObjectMapper::map($this->placedAds, AdPosition::class);
        $this->automaticAdPlacement = ObjectMapper::map($this->automaticAdPlacement, AiSceneAnalysisAutomaticAdPlacement::class);
    }

    /**
     * placedAds
     *
     * @param \BitmovinApiSdk\Models\AdPosition[] $placedAds
     * @return $this
     */
    public function placedAds(array $placedAds)
    {
        $this->placedAds = $placedAds;

        return $this;
    }

    /**
     * automaticAdPlacement
     *
     * @param \BitmovinApiSdk\Models\AiSceneAnalysisAutomaticAdPlacement $automaticAdPlacement
     * @return $this
     */
    public function automaticAdPlacement(\BitmovinApiSdk\Models\AiSceneAnalysisAutomaticAdPlacement $automaticAdPlacement)
    {
        $this->automaticAdPlacement = $automaticAdPlacement;

        return $this;
    }
}

