<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MarlinDrm extends Drm
{
    /** @var string */
    public $key;

    /** @var string */
    public $kid;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * 16 byte key in hex (32 characters) (required)
     *
     * @param string $key
     * @return $this
     */
    public function key(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * 16 byte key in hex (32 characters) (required)
     *
     * @param string $kid
     * @return $this
     */
    public function kid(string $kid)
    {
        $this->kid = $kid;

        return $this;
    }
}

