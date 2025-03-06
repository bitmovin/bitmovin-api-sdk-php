<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AutomaticAdPlacementPosition extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $position;

    /** @var float */
    public $maxDeviation;

    /** @var float */
    public $duration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Position of the ad placement in seconds.
     *
     * @param float $position
     * @return $this
     */
    public function position(float $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Maximum deviation in seconds to the ad placement position.
     *
     * @param float $maxDeviation
     * @return $this
     */
    public function maxDeviation(float $maxDeviation)
    {
        $this->maxDeviation = $maxDeviation;

        return $this;
    }

    /**
     * The desired duration in seconds of the ad to be inserted.
     *
     * @param float $duration
     * @return $this
     */
    public function duration(float $duration)
    {
        $this->duration = $duration;

        return $this;
    }
}

