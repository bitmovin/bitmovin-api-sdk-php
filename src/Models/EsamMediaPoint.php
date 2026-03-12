<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EsamMediaPoint extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $matchTime;

    /** @var \BitmovinApiSdk\Models\EsamSignal[] */
    public $signals;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->matchTime = ObjectMapper::map($this->matchTime, Carbon::class);
        $this->signals = ObjectMapper::map($this->signals, EsamSignal::class);
    }

    /**
     * ISO 8601 date-time specifying when the signal should be matched and inserted into the live stream
     *
     * @param Carbon $matchTime
     * @return $this
     */
    public function matchTime(Carbon $matchTime)
    {
        $this->matchTime = $matchTime;

        return $this;
    }

    /**
     * Array of ESAM signals containing SCTE-35 binary data. At least one signal is required (required)
     *
     * @param \BitmovinApiSdk\Models\EsamSignal[] $signals
     * @return $this
     */
    public function signals(array $signals)
    {
        $this->signals = $signals;

        return $this;
    }
}

