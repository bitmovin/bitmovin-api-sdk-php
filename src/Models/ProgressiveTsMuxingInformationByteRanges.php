<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ProgressiveTsMuxingInformationByteRanges extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $segmentNumber;

    /** @var int */
    public $startBytes;

    /** @var int */
    public $endBytes;

    /** @var float */
    public $duration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Number of the segment (starting at 0) (required)
     *
     * @param int $segmentNumber
     * @return $this
     */
    public function segmentNumber(int $segmentNumber)
    {
        $this->segmentNumber = $segmentNumber;

        return $this;
    }

    /**
     * The position of the first byte of the segment
     *
     * @param int $startBytes
     * @return $this
     */
    public function startBytes(int $startBytes)
    {
        $this->startBytes = $startBytes;

        return $this;
    }

    /**
     * The position of the last byte of the segment
     *
     * @param int $endBytes
     * @return $this
     */
    public function endBytes(int $endBytes)
    {
        $this->endBytes = $endBytes;

        return $this;
    }

    /**
     * The duration of the segment in seconds
     *
     * @param float $duration
     * @return $this
     */
    public function duration(float $duration)
    {
        $this->duration = $duration;

        return $this;
    }
}

