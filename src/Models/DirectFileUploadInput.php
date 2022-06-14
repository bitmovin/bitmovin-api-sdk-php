<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DirectFileUploadInput extends Input
{
    /** @var string */
    public $uploadUrl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

