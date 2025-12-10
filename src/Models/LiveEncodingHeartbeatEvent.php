<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatEvent extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $time;

    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatEventDetails */
    public $details;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->time = ObjectMapper::map($this->time, Carbon::class);
        $this->details = ObjectMapper::map($this->details, LiveEncodingHeartbeatEventDetails::class);
    }

    /**
     * Timestamp of the event, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ (required)
     *
     * @param Carbon $time
     * @return $this
     */
    public function time(Carbon $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * details
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatEventDetails $details
     * @return $this
     */
    public function details(\BitmovinApiSdk\Models\LiveEncodingHeartbeatEventDetails $details)
    {
        $this->details = $details;

        return $this;
    }
}

