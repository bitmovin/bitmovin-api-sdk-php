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

    /** @var string */
    public $masterDisplay;

    /** @var int */
    public $maxContentLightLevel;

    /** @var int */
    public $maxPictureAverageLightLevel;

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

    /**
     * Set the mastering display color volume metadata. The chromaticity coordinates for the green (G), blue (B), red (R) primaries and the white point (WP) are given in increments of 0.00002 (i.e. multiply the actual value by 50000), and the luminance values (L) are given in increments of 0.0001 cd/m² (i.e. multiply the actual value by 10000). For example &#x60;G(13250,34500)B(7500,3000)R(34000,16000)WP(15635,16450)L(10000000,1)&#x60; describes a P3D65 1000-nits monitor, where G(x&#x3D;0.265, y&#x3D;0.690), B(x&#x3D;0.150, y&#x3D;0.060), R(x&#x3D;0.680, y&#x3D;0.320), WP(x&#x3D;0.3127, y&#x3D;0.3290), L(max&#x3D;1000, min&#x3D;0.0001). Part of HDR-10 metadata.
     *
     * @param string $masterDisplay
     * @return $this
     */
    public function masterDisplay(string $masterDisplay)
    {
        $this->masterDisplay = $masterDisplay;

        return $this;
    }

    /**
     * Set the max content light level (MaxCLL). Use together with maxPictureAverageLightLevel (which will be 0 if not set). Part of HDR-10 metadata.
     *
     * @param int $maxContentLightLevel
     * @return $this
     */
    public function maxContentLightLevel(int $maxContentLightLevel)
    {
        $this->maxContentLightLevel = $maxContentLightLevel;

        return $this;
    }

    /**
     * Set the maximum picture average light level (MaxFALL). Use together with maxContentLightLevel (which will be 0 if not set). Part of HDR-10 metadata.
     *
     * @param int $maxPictureAverageLightLevel
     * @return $this
     */
    public function maxPictureAverageLightLevel(int $maxPictureAverageLightLevel)
    {
        $this->maxPictureAverageLightLevel = $maxPictureAverageLightLevel;

        return $this;
    }
}

