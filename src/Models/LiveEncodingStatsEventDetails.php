<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingStatsEventDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var LiveEncodingEventName */
    public $eventType;

    /** @var string */
    public $message;

    /** @var ClockSynchronizationMode */
    public $source;

    /** @var int */
    public $year;

    /** @var int */
    public $month;

    /** @var int */
    public $day;

    /** @var int */
    public $hours;

    /** @var int */
    public $minutes;

    /** @var int */
    public $seconds;

    /** @var int */
    public $microSeconds;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->eventType = ObjectMapper::map($this->eventType, LiveEncodingEventName::class);
        $this->source = ObjectMapper::map($this->source, ClockSynchronizationMode::class);
    }

    /**
     * eventType
     *
     * @param LiveEncodingEventName $eventType
     * @return $this
     */
    public function eventType(LiveEncodingEventName $eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }
}

