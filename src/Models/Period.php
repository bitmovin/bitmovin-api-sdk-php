<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Period extends BitmovinResponse
{
    /** @var float */
    public $start;

    /** @var float */
    public $duration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Starting time in seconds
     *
     * @param float $start
     * @return $this
     */
    public function start(float $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Duration in seconds
     *
     * @param float $duration
     * @return $this
     */
    public function duration(float $duration)
    {
        $this->duration = $duration;

        return $this;
    }
}

