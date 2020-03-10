<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DefaultManifestCondition extends \BitmovinApiSdk\Common\ApiResource
{
    public static $discriminatorMapping = [
        "CONDITION" => DefaultManifestAttributeCondition::class,
        "AND" => DefaultManifestAndCondition::class,
        "OR" => DefaultManifestOrCondition::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

