<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingStatisticsVod extends EncodingStatistics
{
    /** @var int */
    public $timeEnqueued;

    /** @var float */
    public $realtimeFactor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Time in seconds encoded for this encoding. (required)
     *
     * @param int $timeEnqueued
     * @return $this
     */
    public function timeEnqueued(int $timeEnqueued)
    {
        $this->timeEnqueued = $timeEnqueued;

        return $this;
    }

    /**
     * The realtime factor. (required)
     *
     * @param float $realtimeFactor
     * @return $this
     */
    public function realtimeFactor(float $realtimeFactor)
    {
        $this->realtimeFactor = $realtimeFactor;

        return $this;
    }
}

