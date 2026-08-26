<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisRegulatoryAdvisories extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\RegulatoryAdvisoryTopic[] */
    public $topics;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->topics = ObjectMapper::map($this->topics, RegulatoryAdvisoryTopic::class);
    }

    /**
     * The regulatory advisory topics to screen the asset for. At least one topic must be set. (required)
     *
     * @param \BitmovinApiSdk\Models\RegulatoryAdvisoryTopic[] $topics
     * @return $this
     */
    public function topics(array $topics)
    {
        $this->topics = $topics;

        return $this;
    }
}

