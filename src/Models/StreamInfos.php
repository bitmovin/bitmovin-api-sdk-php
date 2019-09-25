<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamInfos extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $time;

    /** @var \BitmovinApiSdk\Models\StreamInfosDetails[] */
    public $streamInfos;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->time = ObjectMapper::map($this->time, Carbon::class);
        $this->streamInfos = ObjectMapper::map($this->streamInfos, StreamInfosDetails::class);
    }

    /**
     * Timestamp of the event formatted in UTC: YYYY-MM-DDThh:mm:ssZ (required)
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
     * Details about billable minutes for each resolution category
     *
     * @param \BitmovinApiSdk\Models\StreamInfosDetails[] $streamInfos
     * @return $this
     */
    public function streamInfos(array $streamInfos)
    {
        $this->streamInfos = $streamInfos;

        return $this;
    }
}

