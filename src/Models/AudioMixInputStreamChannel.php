<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioMixInputStreamChannel extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $inputStreamId;

    /** @var AudioMixChannelType */
    public $outputChannelType;

    /** @var int */
    public $outputChannelNumber;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->outputChannelType = ObjectMapper::map($this->outputChannelType, AudioMixChannelType::class);
    }

    /**
     * The id of the input stream that should be used for mixing.
     *
     * @param string $inputStreamId
     * @return $this
     */
    public function inputStreamId(string $inputStreamId)
    {
        $this->inputStreamId = $inputStreamId;

        return $this;
    }

    /**
     * outputChannelType
     *
     * @param AudioMixChannelType $outputChannelType
     * @return $this
     */
    public function outputChannelType(AudioMixChannelType $outputChannelType)
    {
        $this->outputChannelType = $outputChannelType;

        return $this;
    }

    /**
     * Number of this output channel. If type is &#39;CHANNEL_NUMBER&#39;, this must be set.
     *
     * @param int $outputChannelNumber
     * @return $this
     */
    public function outputChannelNumber(int $outputChannelNumber)
    {
        $this->outputChannelNumber = $outputChannelNumber;

        return $this;
    }
}

