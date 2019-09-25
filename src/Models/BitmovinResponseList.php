<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BitmovinResponseList extends array<BitmovinResponse>
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

