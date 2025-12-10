<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatEventDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatEventType */
    public $eventType;

    /** @var string */
    public $message;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->eventType = ObjectMapper::map($this->eventType, LiveEncodingHeartbeatEventType::class);
    }

    /**
     * eventType
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatEventType $eventType
     * @return $this
     */
    public function eventType(\BitmovinApiSdk\Models\LiveEncodingHeartbeatEventType $eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Short description of the event
     *
     * @param string $message
     * @return $this
     */
    public function message(string $message)
    {
        $this->message = $message;

        return $this;
    }
}

