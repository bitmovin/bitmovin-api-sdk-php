<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Group extends BitmovinResource
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

