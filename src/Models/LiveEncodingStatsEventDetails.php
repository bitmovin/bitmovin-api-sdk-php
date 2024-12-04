<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingStatsEventDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveEncodingEventName */
    public $eventType;

    /** @var string */
    public $message;

    /** @var string[] */
    public $midRollAssetNames;

    /** @var float */
    public $durationInSeconds;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->eventType = ObjectMapper::map($this->eventType, LiveEncodingEventName::class);
    }

    /**
     * eventType
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingEventName $eventType
     * @return $this
     */
    public function eventType(\BitmovinApiSdk\Models\LiveEncodingEventName $eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }
}

