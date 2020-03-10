<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HeAacV2AudioConfiguration extends AudioConfiguration
{
    /** @var AacChannelLayout */
    public $channelLayout;

    /** @var HeAacV2Signaling */
    public $signaling;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, AacChannelLayout::class);
        $this->signaling = ObjectMapper::map($this->signaling, HeAacV2Signaling::class);
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
     * Sets the Spectral Band Replication (SBR) and Parameteric Stereo (PS) signaling style.
     *
     * @param HeAacV2Signaling $signaling
     * @return $this
     */
    public function signaling(HeAacV2Signaling $signaling)
    {
        $this->signaling = $signaling;

        return $this;
    }
}

