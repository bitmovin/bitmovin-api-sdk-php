<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobErrors extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $errorCode;

    /** @var string */
    public $message;

    /** @var string */
    public $details;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

