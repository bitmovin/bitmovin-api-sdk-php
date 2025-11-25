<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysis extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AiSceneAnalysisFeatures */
    public $features;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->features = ObjectMapper::map($this->features, AiSceneAnalysisFeatures::class);
    }

    /**
     * Features of the AI scene analysis
     *
     * @param AiSceneAnalysisFeatures $features
     * @return $this
     */
    public function features(AiSceneAnalysisFeatures $features)
    {
        $this->features = $features;

        return $this;
    }
}

