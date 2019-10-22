<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PaddingSequence extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $duration;

    /** @var PaddingDurationUnit */
    public $unit;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->unit = ObjectMapper::map($this->unit, PaddingDurationUnit::class);
    }

    /**
     * Duration of the padding sequence, given in the unit specified by the &#x60;unit&#x60; property. The maximum duration is 300 frames or 10 seconds. If the unit is &#x60;FRAMES&#x60;, this needs to be an integer value and will be interpreted based on the input frame rate of the main part of the ConcatenationInputStream that is used by your video output stream(s). &#x60;FRAMES&#x60; is not allowed if the encoding does not contain a video output stream. (required)
     *
     * @param float $duration
     * @return $this
     */
    public function duration(float $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * The unit of the &#x60;duration&#x60; property
     *
     * @param PaddingDurationUnit $unit
     * @return $this
     */
    public function unit(PaddingDurationUnit $unit)
    {
        $this->unit = $unit;

        return $this;
    }
}

