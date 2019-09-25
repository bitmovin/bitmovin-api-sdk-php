<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class RawId3Tag extends Id3Tag
{
    /** @var string */
    public $bytes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Base64 Encoded Data (required)
     *
     * @param string $bytes
     * @return $this
     */
    public function bytes(string $bytes)
    {
        $this->bytes = $bytes;

        return $this;
    }
}

