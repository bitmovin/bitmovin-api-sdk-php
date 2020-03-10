<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioMixChannel extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $channelNumber;

    /** @var \BitmovinApiSdk\Models\SourceChannel[] */
    public $sourceChannels;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->sourceChannels = ObjectMapper::map($this->sourceChannels, SourceChannel::class);
    }

    /**
     * Channel number of this mix (starting with 0) (required)
     *
     * @param int $channelNumber
     * @return $this
     */
    public function channelNumber(int $channelNumber)
    {
        $this->channelNumber = $channelNumber;

        return $this;
    }

    /**
     * List of source channels to be mixed (required)
     *
     * @param \BitmovinApiSdk\Models\SourceChannel[] $sourceChannels
     * @return $this
     */
    public function sourceChannels(array $sourceChannels)
    {
        $this->sourceChannels = $sourceChannels;

        return $this;
    }
}

