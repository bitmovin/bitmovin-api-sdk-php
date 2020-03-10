<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AacAudioConfiguration extends AudioConfiguration
{
    /** @var AacChannelLayout */
    public $channelLayout;

    /** @var int */
    public $cutoffFrequency;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, AacChannelLayout::class);
    }

    /**
     * Channel layout of the audio codec configuration
     *
     * @param AacChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(AacChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }

    /**
     * The highest frequency that will pass the audio encoder. This value is optional.
     *
     * @param int $cutoffFrequency
     * @return $this
     */
    public function cutoffFrequency(int $cutoffFrequency)
    {
        $this->cutoffFrequency = $cutoffFrequency;

        return $this;
    }
}

