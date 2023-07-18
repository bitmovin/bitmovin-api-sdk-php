<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveOptionsEntry extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $unitsUsed;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

