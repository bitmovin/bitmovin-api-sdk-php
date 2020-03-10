<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashFmp4Representation extends DashSegmentedRepresentation
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

