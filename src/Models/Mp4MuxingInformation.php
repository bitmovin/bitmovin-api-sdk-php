<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Mp4MuxingInformation extends ProgressiveMuxingInformation
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

