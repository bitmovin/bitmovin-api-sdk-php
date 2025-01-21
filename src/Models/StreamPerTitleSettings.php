<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamPerTitleSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var StreamPerTitleFixedResolutionAndBitrateSettings */
    public $fixedResolutionAndBitrateSettings;

    /** @var float */
    public $codecMaxBitrateFactor;

    /** @var float */
    public $codecBufsizeFactor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->fixedResolutionAndBitrateSettings = ObjectMapper::map($this->fixedResolutionAndBitrateSettings, StreamPerTitleFixedResolutionAndBitrateSettings::class);
    }

    /**
     * Settings for PER_TITLE_TEMPLATE_FIXED_RESOLUTION_AND_BITRATE mode
     *
     * @param StreamPerTitleFixedResolutionAndBitrateSettings $fixedResolutionAndBitrateSettings
     * @return $this
     */
    public function fixedResolutionAndBitrateSettings(StreamPerTitleFixedResolutionAndBitrateSettings $fixedResolutionAndBitrateSettings)
    {
        $this->fixedResolutionAndBitrateSettings = $fixedResolutionAndBitrateSettings;

        return $this;
    }

    /**
     * This factor is used to calculate the maxBitrate of the codec configuration for the generated representation as a multiple of the targetBitrate(generated by Per-Title algorithm). This value will take precedence over the &#39;codecMaxBitrateFactor&#39; from the pertitleStartConfiguration. This value will only have an impact on streams with h264 or h265 video configurations.
     *
     * @param float $codecMaxBitrateFactor
     * @return $this
     */
    public function codecMaxBitrateFactor(float $codecMaxBitrateFactor)
    {
        $this->codecMaxBitrateFactor = $codecMaxBitrateFactor;

        return $this;
    }

    /**
     * This factor is used to calculate the bufsize of the codec configuration for the generated representations as a multiple of the targetBitrate(generated by Per-Title algorithm). This value will take precedence over the &#39;codecBufsizeFactor&#39; from the pertitleStartConfiguration.. This value will only have an impact on streams with h264 or h265 video configurations.
     *
     * @param float $codecBufsizeFactor
     * @return $this
     */
    public function codecBufsizeFactor(float $codecBufsizeFactor)
    {
        $this->codecBufsizeFactor = $codecBufsizeFactor;

        return $this;
    }
}

