<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TimeCode extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $timeCodeStart;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Specify start timecode for writing.
     *
     * @param string $timeCodeStart
     * @return $this
     */
    public function timeCodeStart(string $timeCodeStart)
    {
        $this->timeCodeStart = $timeCodeStart;

        return $this;
    }
}

