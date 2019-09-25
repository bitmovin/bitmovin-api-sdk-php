<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StatisticsPerMuxing extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamId;

    /** @var string */
    public $muxingId;

    /** @var float */
    public $multiplicator;

    /** @var int */
    public $encodedBytes;

    /** @var float */
    public $billableMinutes;

    /** @var \BitmovinApiSdk\Models\MuxingType */
    public $muxingType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->muxingType = ObjectMapper::map($this->muxingType, MuxingType::class);
    }

    /**
     * ID of the stream (required)
     *
     * @param string $streamId
     * @return $this
     */
    public function streamId(string $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * ID of the muxing (required)
     *
     * @param string $muxingId
     * @return $this
     */
    public function muxingId(string $muxingId)
    {
        $this->muxingId = $muxingId;

        return $this;
    }

    /**
     * Multiplier for the encoded minutes. Depends on muxing type. (required)
     *
     * @param float $multiplicator
     * @return $this
     */
    public function multiplicator(float $multiplicator)
    {
        $this->multiplicator = $multiplicator;

        return $this;
    }

    /**
     * Encoded bytes. (required)
     *
     * @param int $encodedBytes
     * @return $this
     */
    public function encodedBytes(int $encodedBytes)
    {
        $this->encodedBytes = $encodedBytes;

        return $this;
    }

    /**
     * Resulting minutes you will be charged for. (required)
     *
     * @param float $billableMinutes
     * @return $this
     */
    public function billableMinutes(float $billableMinutes)
    {
        $this->billableMinutes = $billableMinutes;

        return $this;
    }

    /**
     * muxingType
     *
     * @param \BitmovinApiSdk\Models\MuxingType $muxingType
     * @return $this
     */
    public function muxingType(\BitmovinApiSdk\Models\MuxingType $muxingType)
    {
        $this->muxingType = $muxingType;

        return $this;
    }
}

