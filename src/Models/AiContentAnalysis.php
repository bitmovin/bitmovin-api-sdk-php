<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiContentAnalysis extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AiService */
    public $aiService;

    /** @var AiContentAnalysisFeatures */
    public $features;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->aiService = ObjectMapper::map($this->aiService, AiService::class);
        $this->features = ObjectMapper::map($this->features, AiContentAnalysisFeatures::class);
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
     * Features of the AI content analysis
     *
     * @param AiContentAnalysisFeatures $features
     * @return $this
     */
    public function features(AiContentAnalysisFeatures $features)
    {
        $this->features = $features;

        return $this;
    }
}

