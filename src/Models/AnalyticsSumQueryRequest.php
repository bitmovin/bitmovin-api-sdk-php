<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsSumQueryRequest extends AnalyticsQueryRequest
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

