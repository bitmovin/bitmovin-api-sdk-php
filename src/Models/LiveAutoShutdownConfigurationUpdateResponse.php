<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveAutoShutdownConfigurationUpdateResponse extends LiveAutoShutdownConfiguration
{
    /** @var Carbon */
    public $scheduledShutdownAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->scheduledShutdownAt = ObjectMapper::map($this->scheduledShutdownAt, Carbon::class);
    }
}

