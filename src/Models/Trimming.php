<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Trimming extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $offset;

    /** @var float */
    public $duration;

    /** @var bool */
    public $ignoreDurationIfInputTooShort;

    /** @var string */
    public $startPicTiming;

    /** @var string */
    public $endPicTiming;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Defines the offset in seconds from which the encoding should start, beginning at 0.
     *
     * @param float $offset
     * @return $this
     */
    public function offset(float $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Defines how many seconds from the input will be encoded.
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
     * If set, \&quot;duration\&quot; will be interpreted as a maximum and not cause an error if the input is too short
     *
     * @param bool $ignoreDurationIfInputTooShort
     * @return $this
     */
    public function ignoreDurationIfInputTooShort(bool $ignoreDurationIfInputTooShort)
    {
        $this->ignoreDurationIfInputTooShort = $ignoreDurationIfInputTooShort;

        return $this;
    }

    /**
     * Defines the H264 picture timing of the first frame from which the encoding should start. Any defined offset or duration in seconds will be ignored.
     *
     * @param string $startPicTiming
     * @return $this
     */
    public function startPicTiming(string $startPicTiming)
    {
        $this->startPicTiming = $startPicTiming;

        return $this;
    }

    /**
     * Defines the H264 picture timing of the last frame, that will be included in the encoding. Any defined offset or duration in seconds will be ignored.
     *
     * @param string $endPicTiming
     * @return $this
     */
    public function endPicTiming(string $endPicTiming)
    {
        $this->endPicTiming = $endPicTiming;

        return $this;
    }
}

