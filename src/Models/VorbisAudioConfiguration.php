<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class VorbisAudioConfiguration extends AudioConfiguration
{
    /** @var VorbisChannelLayout */
    public $channelLayout;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->channelLayout = ObjectMapper::map($this->channelLayout, VorbisChannelLayout::class);
    }

    /**
     * Channel layout of the audio codec configuration
     *
     * @param VorbisChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(VorbisChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }
}

