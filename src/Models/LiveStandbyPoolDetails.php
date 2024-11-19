<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolDetails extends LiveStandbyPoolResponse
{
    /** @var string */
    public $encodingTemplate;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

