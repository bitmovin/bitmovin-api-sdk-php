<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ClearKeyDrm extends Drm
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
     * 16 byte encryption key, 32 hexadecimal characters (required)
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
     * 16 byte key id (required)
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

