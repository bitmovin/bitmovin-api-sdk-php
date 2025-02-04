<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ProgramDateTimePlacement extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\ProgramDateTimePlacementMode */
    public $programDateTimePlacementMode;

    /** @var int */
    public $interval;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->programDateTimePlacementMode = ObjectMapper::map($this->programDateTimePlacementMode, ProgramDateTimePlacementMode::class);
    }

    /**
     * programDateTimePlacementMode
     *
     * @param \BitmovinApiSdk\Models\ProgramDateTimePlacementMode $programDateTimePlacementMode
     * @return $this
     */
    public function programDateTimePlacementMode(\BitmovinApiSdk\Models\ProgramDateTimePlacementMode $programDateTimePlacementMode)
    {
        $this->programDateTimePlacementMode = $programDateTimePlacementMode;

        return $this;
    }

    /**
     * Interval for placing ProgramDateTime. Only required for SEGMENTS_INTERVAL or SECONDS_INTERVAL.
     *
     * @param int $interval
     * @return $this
     */
    public function interval(int $interval)
    {
        $this->interval = $interval;

        return $this;
    }
}

