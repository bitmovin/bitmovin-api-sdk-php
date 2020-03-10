<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SourceChannel extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $gain;

    /** @var SourceChannelType */
    public $type;

    /** @var int */
    public $channelNumber;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, SourceChannelType::class);
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
     * @param SourceChannelType $type
     * @return $this
     */
    public function type(SourceChannelType $type)
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

