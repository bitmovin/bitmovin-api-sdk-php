<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PcmAudioConfiguration extends AudioConfiguration
{
    /** @var PcmPresetConfiguration */
    public $presetConfiguration;

    /** @var PcmChannelLayout */
    public $channelLayout;

    /** @var PcmSampleFormat */
    public $sampleFormat;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->presetConfiguration = ObjectMapper::map($this->presetConfiguration, PcmPresetConfiguration::class);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, PcmChannelLayout::class);
        $this->sampleFormat = ObjectMapper::map($this->sampleFormat, PcmSampleFormat::class);
    }

    /**
     * Use a set of well defined configurations preset to support certain use cases. Can be overwritten with more specific values.
     *
     * @param PcmPresetConfiguration $presetConfiguration
     * @return $this
     */
    public function presetConfiguration(PcmPresetConfiguration $presetConfiguration)
    {
        $this->presetConfiguration = $presetConfiguration;

        return $this;
    }

    /**
     * Channel layout of the audio codec configuration
     *
     * @param PcmChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(PcmChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }

    /**
     * Sampling format of the audio codec configuration
     *
     * @param PcmSampleFormat $sampleFormat
     * @return $this
     */
    public function sampleFormat(PcmSampleFormat $sampleFormat)
    {
        $this->sampleFormat = $sampleFormat;

        return $this;
    }
}

