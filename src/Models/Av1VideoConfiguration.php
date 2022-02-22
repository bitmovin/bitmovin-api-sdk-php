<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Av1VideoConfiguration extends VideoConfiguration
{
    /** @var Av1PresetConfiguration */
    public $presetConfiguration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->presetConfiguration = ObjectMapper::map($this->presetConfiguration, Av1PresetConfiguration::class);
    }

    /**
     * Use a set of well defined configurations preset to support certain use cases. Can be overwritten with more specific values.
     *
     * @param Av1PresetConfiguration $presetConfiguration
     * @return $this
     */
    public function presetConfiguration(Av1PresetConfiguration $presetConfiguration)
    {
        $this->presetConfiguration = $presetConfiguration;

        return $this;
    }
}

