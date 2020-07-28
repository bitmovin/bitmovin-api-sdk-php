<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyAtmosAudioConfiguration extends AudioConfiguration
{
    /** @var DolbyAtmosLoudnessControl */
    public $loudnessControl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->loudnessControl = ObjectMapper::map($this->loudnessControl, DolbyAtmosLoudnessControl::class);
    }

    /**
     * Settings for loudness control (required)
     *
     * @param DolbyAtmosLoudnessControl $loudnessControl
     * @return $this
     */
    public function loudnessControl(DolbyAtmosLoudnessControl $loudnessControl)
    {
        $this->loudnessControl = $loudnessControl;

        return $this;
    }
}

