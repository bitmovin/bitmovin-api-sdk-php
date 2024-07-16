<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Keyframe extends BitmovinResource
{
    /** @var float */
    public $time;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Time in seconds where the keyframe should be inserted (required)
     *
     * @param float $time
     * @return $this
     */
    public function time(float $time)
    {
        $this->time = $time;

        return $this;
    }
}

