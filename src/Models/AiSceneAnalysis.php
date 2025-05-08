<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysis extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AiService */
    public $aiService;

    /** @var AiSceneAnalysisFeatures */
    public $features;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->aiService = ObjectMapper::map($this->aiService, AiService::class);
        $this->features = ObjectMapper::map($this->features, AiSceneAnalysisFeatures::class);
    }

    /**
     * AI service settings
     *
     * @param AiService $aiService
     * @return $this
     */
    public function aiService(AiService $aiService)
    {
        $this->aiService = $aiService;

        return $this;
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

