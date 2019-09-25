<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TsProgramClockReferenceConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $pid;

    /** @var int */
    public $interval;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * An integer value. Packet Identifier (PID) for the MPEG Transport Stream PCR. This should generally point to the video stream PID. If it is not explicitly set it will point to the video stream PID if exists, otherwise to the audio stream PID.
     *
     * @param int $pid
     * @return $this
     */
    public function pid(int $pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * An integer value. Nominal time between MPEG Transport Stream PCRs in milliseconds.
     *
     * @param int $interval
     * @return $this
     */
    public function interval(int $interval)
    {
        $this->interval = $interval;

        return $this;
    }
}

