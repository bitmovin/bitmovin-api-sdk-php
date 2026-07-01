<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatTotalProcessingOutlier extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $segmentNumber;

    /** @var int */
    public $durationMs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Output segment number this measurement belongs to.
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
     * Total processing duration in milliseconds.
     *
     * @param int $durationMs
     * @return $this
     */
    public function durationMs(int $durationMs)
    {
        $this->durationMs = $durationMs;

        return $this;
    }
}

