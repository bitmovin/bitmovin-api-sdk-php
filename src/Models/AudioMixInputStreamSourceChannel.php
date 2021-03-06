<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioMixInputStreamSourceChannel extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $gain;

    /** @var AudioMixSourceChannelType */
    public $type;

    /** @var int */
    public $channelNumber;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, AudioMixSourceChannelType::class);
    }

    /**
     * Gain for this source channel. Default is 1.0.
     *
     * @param float $gain
     * @return $this
     */
    public function gain(float $gain)
    {
        $this->gain = $gain;

        return $this;
    }

    /**
     * type
     *
     * @param AudioMixSourceChannelType $type
     * @return $this
     */
    public function type(AudioMixSourceChannelType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Number of this source channel. If type is &#39;CHANNEL_NUMBER&#39;, this must be set.
     *
     * @param int $channelNumber
     * @return $this
     */
    public function channelNumber(int $channelNumber)
    {
        $this->channelNumber = $channelNumber;

        return $this;
    }
}

