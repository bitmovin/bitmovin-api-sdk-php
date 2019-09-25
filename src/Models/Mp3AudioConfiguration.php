<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Mp3AudioConfiguration extends AudioConfiguration
{
    /** @var ChannelLayout */
    public $channelLayout;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->channelLayout = ObjectMapper::map($this->channelLayout, ChannelLayout::class);
    }

    /**
     * Channel layout of the audio codec configuration
     *
     * @param ChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(ChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }
}

