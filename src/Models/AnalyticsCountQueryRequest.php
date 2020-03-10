<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsCountQueryRequest extends AnalyticsQueryRequest
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

