<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingStatsEventDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveEncodingEventName */
    public $eventName;

    /** @var int */
    public $avDriftInSeconds;

    /** @var int */
    public $idleDurationInSeconds;

    /** @var string */
    public $errorMessage;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->eventName = ObjectMapper::map($this->eventName, LiveEncodingEventName::class);
    }

    /**
     * eventName
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingEventName $eventName
     * @return $this
     */
    public function eventName(\BitmovinApiSdk\Models\LiveEncodingEventName $eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * The Audio/Video Drift in seconds. The drift was corrected by the RESYNCING event (occurs at event: RESYNCING)
     *
     * @param int $avDriftInSeconds
     * @return $this
     */
    public function avDriftInSeconds(int $avDriftInSeconds)
    {
        $this->avDriftInSeconds = $avDriftInSeconds;

        return $this;
    }

    /**
     * The time the stream was in idle state in seconds (occurs at event: IDLE)
     *
     * @param int $idleDurationInSeconds
     * @return $this
     */
    public function idleDurationInSeconds(int $idleDurationInSeconds)
    {
        $this->idleDurationInSeconds = $idleDurationInSeconds;

        return $this;
    }

    /**
     * An optional error message, when the event is in error state (occurs at event: ERROR)
     *
     * @param string $errorMessage
     * @return $this
     */
    public function errorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }
}

