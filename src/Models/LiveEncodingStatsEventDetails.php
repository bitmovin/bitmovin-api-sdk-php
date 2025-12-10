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

    /** @var string */
    public $additionalProperties;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->eventType = ObjectMapper::map($this->eventType, LiveEncodingEventName::class);
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

    /**
     * Additional event details as key-value pairs
     *
     * @param string $additionalProperties
     * @return $this
     */
    public function additionalProperties(string $additionalProperties)
    {
        $this->additionalProperties = $additionalProperties;

        return $this;
    }
}

