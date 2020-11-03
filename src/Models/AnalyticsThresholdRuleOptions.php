<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsThresholdRuleOptions extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $threshold;

    /** @var int */
    public $persistence;

    /** @var int */
    public $sampleSize;

    /** @var int */
    public $recovery;

    /** @var int */
    public $repeatInterval;

    /** @var bool */
    public $notifyOnResolved;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Threshold for triggering alert (required)
     *
     * @param float $threshold
     * @return $this
     */
    public function threshold(float $threshold)
    {
        $this->threshold = $threshold;

        return $this;
    }

    /**
     * Persistence of threshold violation in minutes (required)
     *
     * @param int $persistence
     * @return $this
     */
    public function persistence(int $persistence)
    {
        $this->persistence = $persistence;

        return $this;
    }

    /**
     * Sample size for rule processing (required)
     *
     * @param int $sampleSize
     * @return $this
     */
    public function sampleSize(int $sampleSize)
    {
        $this->sampleSize = $sampleSize;

        return $this;
    }

    /**
     * Number of minutes without violation after which incident is considered as recovered (required)
     *
     * @param int $recovery
     * @return $this
     */
    public function recovery(int $recovery)
    {
        $this->recovery = $recovery;

        return $this;
    }

    /**
     * Interval for repeating notifications (required)
     *
     * @param int $repeatInterval
     * @return $this
     */
    public function repeatInterval(int $repeatInterval)
    {
        $this->repeatInterval = $repeatInterval;

        return $this;
    }

    /**
     * Send notification after incident is resolved
     *
     * @param bool $notifyOnResolved
     * @return $this
     */
    public function notifyOnResolved(bool $notifyOnResolved)
    {
        $this->notifyOnResolved = $notifyOnResolved;

        return $this;
    }
}

