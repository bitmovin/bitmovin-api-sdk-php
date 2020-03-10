<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioMixFilter extends Filter
{
    /** @var AudioMixChannelLayout */
    public $channelLayout;

    /** @var \BitmovinApiSdk\Models\AudioMixChannel[] */
    public $audioMixChannels;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, AudioMixChannelLayout::class);
        $this->audioMixChannels = ObjectMapper::map($this->audioMixChannels, AudioMixChannel::class);
    }

    /**
     * Channel layout of the audio codec configuration (required)
     *
     * @param AudioMixChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(AudioMixChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }

    /**
     * List of mixed channels that matches the channel layout (required)
     *
     * @param \BitmovinApiSdk\Models\AudioMixChannel[] $audioMixChannels
     * @return $this
     */
    public function audioMixChannels(array $audioMixChannels)
    {
        $this->audioMixChannels = $audioMixChannels;

        return $this;
    }
}

