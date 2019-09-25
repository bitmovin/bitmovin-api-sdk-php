<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Ignoring extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var IgnoredBy */
    public $ignoredBy;

    /** @var string */
    public $ignoredByDescription;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->ignoredBy = ObjectMapper::map($this->ignoredBy, IgnoredBy::class);
    }
}

