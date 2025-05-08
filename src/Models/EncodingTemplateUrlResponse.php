<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingTemplateUrlResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $url;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

