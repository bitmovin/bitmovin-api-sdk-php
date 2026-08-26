<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ContentAdvisory extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AdvisoryCategory */
    public $category;

    /** @var AdvisoryConfidence */
    public $confidence;

    /** @var string */
    public $reason;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->category = ObjectMapper::map($this->category, AdvisoryCategory::class);
        $this->confidence = ObjectMapper::map($this->confidence, AdvisoryConfidence::class);
    }

    /**
     * The kind of advisory-relevant imagery that was detected (required)
     *
     * @param AdvisoryCategory $category
     * @return $this
     */
    public function category(AdvisoryCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * The model&#39;s own certainty in this detection. Intended to help prioritise human review rather than as a threshold for discarding advisories: detection is tuned to flag uncertain cases rather than miss them, and shots that could not be analysed are reported with LOW confidence (required)
     *
     * @param AdvisoryConfidence $confidence
     * @return $this
     */
    public function confidence(AdvisoryConfidence $confidence)
    {
        $this->confidence = $confidence;

        return $this;
    }

    /**
     * A short explanation of what was seen in the shot
     *
     * @param string $reason
     * @return $this
     */
    public function reason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }
}

