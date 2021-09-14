<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveAutoShutdownConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $bytesReadTimeoutSeconds;

    /** @var int */
    public $streamTimeoutMinutes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Automatically shutdown the live stream if there is no input anymore for a predefined number of seconds.
     *
     * @param int $bytesReadTimeoutSeconds
     * @return $this
     */
    public function bytesReadTimeoutSeconds(int $bytesReadTimeoutSeconds)
    {
        $this->bytesReadTimeoutSeconds = $bytesReadTimeoutSeconds;

        return $this;
    }

    /**
     * Automatically shutdown the live stream after a predefined runtime in minutes.
     *
     * @param int $streamTimeoutMinutes
     * @return $this
     */
    public function streamTimeoutMinutes(int $streamTimeoutMinutes)
    {
        $this->streamTimeoutMinutes = $streamTimeoutMinutes;

        return $this;
    }
}

