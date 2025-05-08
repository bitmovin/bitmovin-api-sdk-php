<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisFeatures extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AiSceneAnalysisAssetDescription */
    public $assetDescription;

    /** @var AiSceneAnalysisAutomaticAdPlacement */
    public $automaticAdPlacement;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->assetDescription = ObjectMapper::map($this->assetDescription, AiSceneAnalysisAssetDescription::class);
        $this->automaticAdPlacement = ObjectMapper::map($this->automaticAdPlacement, AiSceneAnalysisAutomaticAdPlacement::class);
    }

    /**
     * AI scene analysis will create an asset description file.
     *
     * @param AiSceneAnalysisAssetDescription $assetDescription
     * @return $this
     */
    public function assetDescription(AiSceneAnalysisAssetDescription $assetDescription)
    {
        $this->assetDescription = $assetDescription;

        return $this;
    }

    /**
     * Ad markers placed on detected scene changes and configured positions.
     *
     * @param AiSceneAnalysisAutomaticAdPlacement $automaticAdPlacement
     * @return $this
     */
    public function automaticAdPlacement(AiSceneAnalysisAutomaticAdPlacement $automaticAdPlacement)
    {
        $this->automaticAdPlacement = $automaticAdPlacement;

        return $this;
    }
}

