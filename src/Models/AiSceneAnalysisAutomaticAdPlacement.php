<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisAutomaticAdPlacement extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AutomaticAdPlacementPosition[] */
    public $schedule;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->schedule = ObjectMapper::map($this->schedule, AutomaticAdPlacementPosition::class);
    }

    /**
     * Ad placements schedule
     *
     * @param \BitmovinApiSdk\Models\AutomaticAdPlacementPosition[] $schedule
     * @return $this
     */
    public function schedule(array $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }
}

