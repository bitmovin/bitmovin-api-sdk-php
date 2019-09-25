<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingErrorEmailNotification extends EmailNotification
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

