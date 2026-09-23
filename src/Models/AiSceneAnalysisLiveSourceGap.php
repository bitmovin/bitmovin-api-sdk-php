<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveSourceGap extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $startTimeSeconds;

    /** @var float */
    public $endTimeSeconds;

    /** @var AiSceneAnalysisLiveSourceGapReason */
    public $reason;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->reason = ObjectMapper::map($this->reason, AiSceneAnalysisLiveSourceGapReason::class);
    }

    /**
     * Gap start on the monotonic analysis timeline (required)
     *
     * @param float $startTimeSeconds
     * @return $this
     */
    public function startTimeSeconds(float $startTimeSeconds)
    {
        $this->startTimeSeconds = $startTimeSeconds;

        return $this;
    }

    /**
     * Gap end on the monotonic analysis timeline (required)
     *
     * @param float $endTimeSeconds
     * @return $this
     */
    public function endTimeSeconds(float $endTimeSeconds)
    {
        $this->endTimeSeconds = $endTimeSeconds;

        return $this;
    }

    /**
     * Reason for the source gap (required)
     *
     * @param AiSceneAnalysisLiveSourceGapReason $reason
     * @return $this
     */
    public function reason(AiSceneAnalysisLiveSourceGapReason $reason)
    {
        $this->reason = $reason;

        return $this;
    }
}

