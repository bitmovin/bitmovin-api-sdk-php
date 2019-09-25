<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AutoRestartConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $segmentsWrittenTimeout;

    /** @var float */
    public $bytesWrittenTimeout;

    /** @var float */
    public $framesWrittenTimeout;

    /** @var float */
    public $hlsManifestsUpdateTimeout;

    /** @var float */
    public $dashManifestsUpdateTimeout;

    /** @var string */
    public $scheduleExpression;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * If no segments were generated for the given number of seconds, a restart is triggered. Minimum: 30.0
     *
     * @param float $segmentsWrittenTimeout
     * @return $this
     */
    public function segmentsWrittenTimeout(float $segmentsWrittenTimeout)
    {
        $this->segmentsWrittenTimeout = $segmentsWrittenTimeout;

        return $this;
    }

    /**
     * If no data was written for the given number of seconds, a restart is triggered. Minimum: 30.0
     *
     * @param float $bytesWrittenTimeout
     * @return $this
     */
    public function bytesWrittenTimeout(float $bytesWrittenTimeout)
    {
        $this->bytesWrittenTimeout = $bytesWrittenTimeout;

        return $this;
    }

    /**
     * If no frames were generated for the given number of seconds, a restart is triggered. Minimum: 30.0
     *
     * @param float $framesWrittenTimeout
     * @return $this
     */
    public function framesWrittenTimeout(float $framesWrittenTimeout)
    {
        $this->framesWrittenTimeout = $framesWrittenTimeout;

        return $this;
    }

    /**
     * If HLS manifests were not updated for the given number of seconds, a restart is triggered. Minimum: 30.0
     *
     * @param float $hlsManifestsUpdateTimeout
     * @return $this
     */
    public function hlsManifestsUpdateTimeout(float $hlsManifestsUpdateTimeout)
    {
        $this->hlsManifestsUpdateTimeout = $hlsManifestsUpdateTimeout;

        return $this;
    }

    /**
     * If DASH manifests were not updated for the given number of seconds, a restart is triggered. Minimum: 30.0
     *
     * @param float $dashManifestsUpdateTimeout
     * @return $this
     */
    public function dashManifestsUpdateTimeout(float $dashManifestsUpdateTimeout)
    {
        $this->dashManifestsUpdateTimeout = $dashManifestsUpdateTimeout;

        return $this;
    }

    /**
     * Defines a schedule for restarts using the unix crontab syntax. This example would trigger a restart every monday at 05:30 (AM)
     *
     * @param string $scheduleExpression
     * @return $this
     */
    public function scheduleExpression(string $scheduleExpression)
    {
        $this->scheduleExpression = $scheduleExpression;

        return $this;
    }
}

