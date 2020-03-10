<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingStats extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveEncodingStatus */
    public $status;

    /** @var \BitmovinApiSdk\Models\LiveEncodingStatsEvent[] */
    public $events;

    /** @var \BitmovinApiSdk\Models\StreamInfos[] */
    public $statistics;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, LiveEncodingStatus::class);
        $this->events = ObjectMapper::map($this->events, LiveEncodingStatsEvent::class);
        $this->statistics = ObjectMapper::map($this->statistics, StreamInfos::class);
    }

    /**
     * status
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingStatus $status
     * @return $this
     */
    public function status(\BitmovinApiSdk\Models\LiveEncodingStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * List of events
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingStatsEvent[] $events
     * @return $this
     */
    public function events(array $events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * List of statistics
     *
     * @param \BitmovinApiSdk\Models\StreamInfos[] $statistics
     * @return $this
     */
    public function statistics(array $statistics)
    {
        $this->statistics = $statistics;

        return $this;
    }
}

