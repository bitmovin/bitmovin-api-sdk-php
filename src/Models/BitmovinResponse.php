<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BitmovinResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

