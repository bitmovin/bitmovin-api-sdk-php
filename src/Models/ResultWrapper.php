<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ResultWrapper extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var object */
    public $result;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

