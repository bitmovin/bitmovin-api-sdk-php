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
     * Duration in seconds.&lt;br/&gt;Please note that the duration of a Period is usually determined by the media contained therein.&lt;br/&gt;Setting the &#x60;duration&#x60; property to a specific value will override this default behaviour.&lt;br/&gt;Warning: Use at your own risk!
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

