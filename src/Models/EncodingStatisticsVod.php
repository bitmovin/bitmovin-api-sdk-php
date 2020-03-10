<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingStatisticsVod extends EncodingStatistics
{
    /** @var int */
    public $timeEnqueued;

    /** @var float */
    public $realTimeFactor;

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
     * @param float $realTimeFactor
     * @return $this
     */
    public function realTimeFactor(float $realTimeFactor)
    {
        $this->realTimeFactor = $realTimeFactor;

        return $this;
    }
}

