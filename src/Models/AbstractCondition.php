<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AbstractCondition extends \BitmovinApiSdk\Common\ApiResource
{
    public static $discriminatorMapping = [
        "CONDITION" => Condition::class,
        "AND" => AndConjunction::class,
        "OR" => OrConjunction::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

