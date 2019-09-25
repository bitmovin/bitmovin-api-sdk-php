<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlayerVersion extends BitmovinResponse
{
    /** @var string */
    public $version;

    /** @var string */
    public $cdnUrl;

    /** @var string */
    public $downloadUrl;

    /** @var Carbon */
    public $createdAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
    }
}

