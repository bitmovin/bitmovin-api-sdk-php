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

    /** @var AkamaiMslStreamFormat */
    public $streamFormat;

    /** @var AkamaiMslVersion */
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
     * The stream format. Only DASH is supported at the moment. (required)
     *
     * @param AkamaiMslStreamFormat $streamFormat
     * @return $this
     */
    public function streamFormat(AkamaiMslStreamFormat $streamFormat)
    {
        $this->streamFormat = $streamFormat;

        return $this;
    }

    /**
     * The Akamai MSL Version. Only MSL4 is supported at the moment. (required)
     *
     * @param AkamaiMslVersion $mslVersion
     * @return $this
     */
    public function mslVersion(AkamaiMslVersion $mslVersion)
    {
        $this->mslVersion = $mslVersion;

        return $this;
    }
}

