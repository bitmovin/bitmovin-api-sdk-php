<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioVolumeFilter extends Filter
{
    /** @var float */
    public $volume;

    /** @var \BitmovinApiSdk\Models\AudioVolumeUnit */
    public $unit;

    /** @var \BitmovinApiSdk\Models\AudioVolumeFormat */
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
     * @param \BitmovinApiSdk\Models\AudioVolumeUnit $unit
     * @return $this
     */
    public function unit(\BitmovinApiSdk\Models\AudioVolumeUnit $unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * format
     *
     * @param \BitmovinApiSdk\Models\AudioVolumeFormat $format
     * @return $this
     */
    public function format(\BitmovinApiSdk\Models\AudioVolumeFormat $format)
    {
        $this->format = $format;

        return $this;
    }
}

