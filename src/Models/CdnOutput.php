<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CdnOutput extends Output
{
    /** @var string */
    public $domainName;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

