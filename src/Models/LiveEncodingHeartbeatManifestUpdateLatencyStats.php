<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatManifestUpdateLatencyStats extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $mean;

    /** @var int */
    public $median;

    /** @var int */
    public $min;

    /** @var int */
    public $max;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Mean manifest update latency in milliseconds.
     *
     * @param int $mean
     * @return $this
     */
    public function mean(int $mean)
    {
        $this->mean = $mean;

        return $this;
    }

    /**
     * Median manifest update latency in milliseconds.
     *
     * @param int $median
     * @return $this
     */
    public function median(int $median)
    {
        $this->median = $median;

        return $this;
    }

    /**
     * Minimum manifest update latency in milliseconds.
     *
     * @param int $min
     * @return $this
     */
    public function min(int $min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Maximum manifest update latency in milliseconds.
     *
     * @param int $max
     * @return $this
     */
    public function max(int $max)
    {
        $this->max = $max;

        return $this;
    }
}

