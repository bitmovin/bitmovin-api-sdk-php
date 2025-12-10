<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeat extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $timestamp;

    /** @var LiveEncodingHeartbeatIngest */
    public $ingest;

    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatEvent[] */
    public $events;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->timestamp = ObjectMapper::map($this->timestamp, Carbon::class);
        $this->ingest = ObjectMapper::map($this->ingest, LiveEncodingHeartbeatIngest::class);
        $this->events = ObjectMapper::map($this->events, LiveEncodingHeartbeatEvent::class);
    }

    /**
     * timestamp, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $timestamp
     * @return $this
     */
    public function timestamp(Carbon $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Information about the live ingestion status
     *
     * @param LiveEncodingHeartbeatIngest $ingest
     * @return $this
     */
    public function ingest(LiveEncodingHeartbeatIngest $ingest)
    {
        $this->ingest = $ingest;

        return $this;
    }

    /**
     * Live encoding heartbeat events
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatEvent[] $events
     * @return $this
     */
    public function events(array $events)
    {
        $this->events = $events;

        return $this;
    }
}

