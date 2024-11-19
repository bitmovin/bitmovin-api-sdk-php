<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolEncodingIngestPoint extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamBaseUrl;

    /** @var string */
    public $streamKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

