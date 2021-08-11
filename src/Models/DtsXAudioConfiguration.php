<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DtsXAudioConfiguration extends AudioConfiguration
{
    /** @var DtsXChannelLayout */
    public $channelLayout;

    /** @var float */
    public $lkfsValue;

    /** @var OttLoudnessMode */
    public $ottLoudnessMode;

    /** @var int */
    public $syncInterval;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, DtsXChannelLayout::class);
        $this->ottLoudnessMode = ObjectMapper::map($this->ottLoudnessMode, OttLoudnessMode::class);
    }

    /**
     * channelLayout
     *
     * @param DtsXChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(DtsXChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }

    /**
     * Loudness relative to full scale (K-weighted).
     *
     * @param float $lkfsValue
     * @return $this
     */
    public function lkfsValue(float $lkfsValue)
    {
        $this->lkfsValue = $lkfsValue;

        return $this;
    }

    /**
     * ottLoudnessMode
     *
     * @param OttLoudnessMode $ottLoudnessMode
     * @return $this
     */
    public function ottLoudnessMode(OttLoudnessMode $ottLoudnessMode)
    {
        $this->ottLoudnessMode = $ottLoudnessMode;

        return $this;
    }

    /**
     * Specifies the sync interval which ranges from 1 to 10
     *
     * @param int $syncInterval
     * @return $this
     */
    public function syncInterval(int $syncInterval)
    {
        $this->syncInterval = $syncInterval;

        return $this;
    }
}

