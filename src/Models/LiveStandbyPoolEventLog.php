<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolEventLog extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $standbyPoolId;

    /** @var string */
    public $standbyPoolEncodingId;

    /** @var string */
    public $createdAt;

    /** @var string */
    public $message;

    /** @var string */
    public $details;

    /** @var LiveStandbyPoolEventLogType */
    public $eventType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->eventType = ObjectMapper::map($this->eventType, LiveStandbyPoolEventLogType::class);
    }

    /**
     * eventType
     *
     * @param LiveStandbyPoolEventLogType $eventType
     * @return $this
     */
    public function eventType(LiveStandbyPoolEventLogType $eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }
}

