<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncoding extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamKey;

    /** @var string */
    public $encoderIp;

    /** @var string */
    public $application;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

