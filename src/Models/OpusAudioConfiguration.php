<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class OpusAudioConfiguration extends AudioConfiguration
{
    /** @var OpusChannelLayout */
    public $channelLayout;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, OpusChannelLayout::class);
    }

    /**
     * Channel layout of the audio codec configuration
     *
     * @param OpusChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(OpusChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }
}

