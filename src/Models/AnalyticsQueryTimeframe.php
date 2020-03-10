<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsQueryTimeframe extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $start;

    /** @var Carbon */
    public $end;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->start = ObjectMapper::map($this->start, Carbon::class);
        $this->end = ObjectMapper::map($this->end, Carbon::class);
    }

    /**
     * Start of timeframe which is queried in UTC format.
     *
     * @param Carbon $start
     * @return $this
     */
    public function start(Carbon $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * End of timeframe which is queried in UTC format.
     *
     * @param Carbon $end
     * @return $this
     */
    public function end(Carbon $end)
    {
        $this->end = $end;

        return $this;
    }
}

