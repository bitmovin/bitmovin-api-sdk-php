<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HeAacV1AudioConfiguration extends AudioConfiguration
{
    /** @var AacChannelLayout */
    public $channelLayout;

    /** @var HeAacV1Signaling */
    public $signaling;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, AacChannelLayout::class);
        $this->signaling = ObjectMapper::map($this->signaling, HeAacV1Signaling::class);
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
     * @param HeAacV1Signaling $signaling
     * @return $this
     */
    public function signaling(HeAacV1Signaling $signaling)
    {
        $this->signaling = $signaling;

        return $this;
    }
}

