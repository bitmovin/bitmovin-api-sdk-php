<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AkamaiMslOutput extends Output
{
    /** @var int */
    public $streamId;

    /** @var string */
    public $eventName;

    /** @var \BitmovinApiSdk\Models\AkamaiMslStreamFormat */
    public $streamFormat;

    /** @var \BitmovinApiSdk\Models\AkamaiMslVersion */
    public $mslVersion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->streamFormat = ObjectMapper::map($this->streamFormat, AkamaiMslStreamFormat::class);
        $this->mslVersion = ObjectMapper::map($this->mslVersion, AkamaiMslVersion::class);
    }

    /**
     * The Akamai stream ID (required)
     *
     * @param int $streamId
     * @return $this
     */
    public function streamId(int $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * The Akamai event name (required)
     *
     * @param string $eventName
     * @return $this
     */
    public function eventName(string $eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * streamFormat
     *
     * @param \BitmovinApiSdk\Models\AkamaiMslStreamFormat $streamFormat
     * @return $this
     */
    public function streamFormat(\BitmovinApiSdk\Models\AkamaiMslStreamFormat $streamFormat)
    {
        $this->streamFormat = $streamFormat;

        return $this;
    }

    /**
     * mslVersion
     *
     * @param \BitmovinApiSdk\Models\AkamaiMslVersion $mslVersion
     * @return $this
     */
    public function mslVersion(\BitmovinApiSdk\Models\AkamaiMslVersion $mslVersion)
    {
        $this->mslVersion = $mslVersion;

        return $this;
    }
}

