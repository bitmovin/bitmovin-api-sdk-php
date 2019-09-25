<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioMixInputStream extends InputStream
{
    /** @var AudioMixInputChannelLayout */
    public $channelLayout;

    /** @var \BitmovinApiSdk\Models\AudioMixInputStreamChannel[] */
    public $audioMixChannels;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->channelLayout = ObjectMapper::map($this->channelLayout, AudioMixInputChannelLayout::class);
        $this->audioMixChannels = ObjectMapper::map($this->audioMixChannels, AudioMixInputStreamChannel::class);
    }

    /**
     * Channel layout of the audio mix input stream
     *
     * @param AudioMixInputChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(AudioMixInputChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }

    /**
     * audioMixChannels
     *
     * @param \BitmovinApiSdk\Models\AudioMixInputStreamChannel[] $audioMixChannels
     * @return $this
     */
    public function audioMixChannels(array $audioMixChannels)
    {
        $this->audioMixChannels = $audioMixChannels;

        return $this;
    }
}

