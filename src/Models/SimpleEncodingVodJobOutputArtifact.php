<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobOutputArtifact extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var string */
    public $value;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

