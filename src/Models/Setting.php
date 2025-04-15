<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Setting extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\Location */
    public $location;

    /** @var string */
    public $timeOfDay;

    /** @var \BitmovinApiSdk\Models\Atmosphere */
    public $atmosphere;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->location = ObjectMapper::map($this->location, Location::class);
        $this->atmosphere = ObjectMapper::map($this->atmosphere, Atmosphere::class);
    }

    /**
     * location
     *
     * @param \BitmovinApiSdk\Models\Location $location
     * @return $this
     */
    public function location(\BitmovinApiSdk\Models\Location $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * timeOfDay
     *
     * @param string $timeOfDay
     * @return $this
     */
    public function timeOfDay(string $timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;

        return $this;
    }

    /**
     * atmosphere
     *
     * @param \BitmovinApiSdk\Models\Atmosphere $atmosphere
     * @return $this
     */
    public function atmosphere(\BitmovinApiSdk\Models\Atmosphere $atmosphere)
    {
        $this->atmosphere = $atmosphere;

        return $this;
    }
}

