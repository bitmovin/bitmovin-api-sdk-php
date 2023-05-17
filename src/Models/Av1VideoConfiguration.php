<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Av1VideoConfiguration extends VideoConfiguration
{
    /** @var Av1PresetConfiguration */
    public $presetConfiguration;

    /** @var AutoLevelSetup */
    public $autoLevelSetup;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->presetConfiguration = ObjectMapper::map($this->presetConfiguration, Av1PresetConfiguration::class);
        $this->autoLevelSetup = ObjectMapper::map($this->autoLevelSetup, AutoLevelSetup::class);
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

    /**
     * Enable/disable automatic calculation of level, maxBitrate, and bufsize based on the least level that satisfies maximum property values for picture resolution, frame rate, and bit rate. In the case the target level is set explicitly, the maximum bitrate and buffer size are calculated based on the defined level. Explicitly setting maxBitrate, or bufsize properties will disable the automatic calculation.
     *
     * @param AutoLevelSetup $autoLevelSetup
     * @return $this
     */
    public function autoLevelSetup(AutoLevelSetup $autoLevelSetup)
    {
        $this->autoLevelSetup = $autoLevelSetup;

        return $this;
    }
}

