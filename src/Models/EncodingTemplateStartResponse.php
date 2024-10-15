<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingTemplateStartResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $encodingId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

