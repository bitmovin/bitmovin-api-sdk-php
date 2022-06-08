<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobInput extends \BitmovinApiSdk\Common\ApiResource
{
    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "URL" => SimpleEncodingVodJobUrlInput::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

