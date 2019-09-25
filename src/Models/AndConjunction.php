<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AndConjunction extends AbstractConjunction
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

