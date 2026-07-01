<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H265V2VideoConfiguration extends VideoConfiguration
{
    /** @var H265V2PresetConfiguration */
    public $presetConfiguration;

    /** @var H265DynamicRangeFormat */
    public $dynamicRangeFormat;

    /** @var H265V2RateControlModeConfig */
    public $rateControlModeConfig;

    /** @var H265V2MotionCompensatedTemporalFiltering */
    public $motionCompensatedTemporalFiltering;

    /** @var bool */
    public $levelHighTier;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->presetConfiguration = ObjectMapper::map($this->presetConfiguration, H265V2PresetConfiguration::class);
        $this->dynamicRangeFormat = ObjectMapper::map($this->dynamicRangeFormat, H265DynamicRangeFormat::class);
        $this->rateControlModeConfig = ObjectMapper::map($this->rateControlModeConfig, H265V2RateControlModeConfig::class);
        $this->motionCompensatedTemporalFiltering = ObjectMapper::map($this->motionCompensatedTemporalFiltering, H265V2MotionCompensatedTemporalFiltering::class);
    }

    /**
     * Use a set of well defined configurations preset to support certain use cases. Can be overwritten with more specific values.
     *
     * @param H265V2PresetConfiguration $presetConfiguration
     * @return $this
     */
    public function presetConfiguration(H265V2PresetConfiguration $presetConfiguration)
    {
        $this->presetConfiguration = $presetConfiguration;

        return $this;
    }

    /**
     * Automatically configures the encoder for the given SDR/HDR format.
     *
     * @param H265DynamicRangeFormat $dynamicRangeFormat
     * @return $this
     */
    public function dynamicRangeFormat(H265DynamicRangeFormat $dynamicRangeFormat)
    {
        $this->dynamicRangeFormat = $dynamicRangeFormat;

        return $this;
    }

    /**
     * Rate control mode configuration. Used to Configure the Perceptual Encoding Mode Settings.
     *
     * @param H265V2RateControlModeConfig $rateControlModeConfig
     * @return $this
     */
    public function rateControlModeConfig(H265V2RateControlModeConfig $rateControlModeConfig)
    {
        $this->rateControlModeConfig = $rateControlModeConfig;

        return $this;
    }

    /**
     * Motion compensated temporal filtering mode.
     *
     * @param H265V2MotionCompensatedTemporalFiltering $motionCompensatedTemporalFiltering
     * @return $this
     */
    public function motionCompensatedTemporalFiltering(H265V2MotionCompensatedTemporalFiltering $motionCompensatedTemporalFiltering)
    {
        $this->motionCompensatedTemporalFiltering = $motionCompensatedTemporalFiltering;

        return $this;
    }

    /**
     * Set codec tier to high when true, main when false.
     *
     * @param bool $levelHighTier
     * @return $this
     */
    public function levelHighTier(bool $levelHighTier)
    {
        $this->levelHighTier = $levelHighTier;

        return $this;
    }
}

