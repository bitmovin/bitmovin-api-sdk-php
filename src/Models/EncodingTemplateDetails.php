<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingTemplateDetails extends EncodingTemplateResponse
{
    /** @var string */
    public $url;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

