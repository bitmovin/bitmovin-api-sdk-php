<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioVolumeFilter extends Filter
{
    /** @var float */
    public $volume;

    /** @var AudioVolumeUnit */
    public $unit;

    /** @var AudioVolumeFormat */
    public $format;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->unit = ObjectMapper::map($this->unit, AudioVolumeUnit::class);
        $this->format = ObjectMapper::map($this->format, AudioVolumeFormat::class);
    }

    /**
     * Audio volume value (required)
     *
     * @param float $volume
     * @return $this
     */
    public function volume(float $volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * unit
     *
     * @param AudioVolumeUnit $unit
     * @return $this
     */
    public function unit(AudioVolumeUnit $unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * format
     *
     * @param AudioVolumeFormat $format
     * @return $this
     */
    public function format(AudioVolumeFormat $format)
    {
        $this->format = $format;

        return $this;
    }
}

