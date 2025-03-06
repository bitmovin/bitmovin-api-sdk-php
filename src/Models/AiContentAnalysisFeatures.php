<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiContentAnalysisFeatures extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AiContentAnalysisAssetDescription */
    public $assetDescription;

    /** @var AiContentAnalysisAutomaticAdPlacement */
    public $automaticAdPlacement;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->assetDescription = ObjectMapper::map($this->assetDescription, AiContentAnalysisAssetDescription::class);
        $this->automaticAdPlacement = ObjectMapper::map($this->automaticAdPlacement, AiContentAnalysisAutomaticAdPlacement::class);
    }

    /**
     * AI content analysis will create an asset description file.
     *
     * @param AiContentAnalysisAssetDescription $assetDescription
     * @return $this
     */
    public function assetDescription(AiContentAnalysisAssetDescription $assetDescription)
    {
        $this->assetDescription = $assetDescription;

        return $this;
    }

    /**
     * Ad markers placed on detected scene changes and configured positions.
     *
     * @param AiContentAnalysisAutomaticAdPlacement $automaticAdPlacement
     * @return $this
     */
    public function automaticAdPlacement(AiContentAnalysisAutomaticAdPlacement $automaticAdPlacement)
    {
        $this->automaticAdPlacement = $automaticAdPlacement;

        return $this;
    }
}

