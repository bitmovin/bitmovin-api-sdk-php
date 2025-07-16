<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashManifestAdMarkerSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DashScte35PeriodOption */
    public $periodOption;

    /** @var DashScte35EventStreamSignalling */
    public $eventStreamSignalling;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->periodOption = ObjectMapper::map($this->periodOption, DashScte35PeriodOption::class);
        $this->eventStreamSignalling = ObjectMapper::map($this->eventStreamSignalling, DashScte35EventStreamSignalling::class);
    }

    /**
     * periodOption
     *
     * @param DashScte35PeriodOption $periodOption
     * @return $this
     */
    public function periodOption(DashScte35PeriodOption $periodOption)
    {
        $this->periodOption = $periodOption;

        return $this;
    }

    /**
     * eventStreamSignalling
     *
     * @param DashScte35EventStreamSignalling $eventStreamSignalling
     * @return $this
     */
    public function eventStreamSignalling(DashScte35EventStreamSignalling $eventStreamSignalling)
    {
        $this->eventStreamSignalling = $eventStreamSignalling;

        return $this;
    }
}

