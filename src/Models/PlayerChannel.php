<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlayerChannel extends BitmovinResponse
{
    /** @var string */
    public $name;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

