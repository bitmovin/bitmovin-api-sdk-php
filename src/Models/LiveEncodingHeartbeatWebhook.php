<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatWebhook extends Webhook
{
    /** @var int */
    public $interval;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The interval of the heartbeat in seconds.
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

