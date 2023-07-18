<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StartLiveChannelEncodingRequest extends StartLiveEncodingRequest
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

