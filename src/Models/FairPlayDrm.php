<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class FairPlayDrm extends Drm
{
    /** @var string */
    public $key;

    /** @var string */
    public $iv;

    /** @var string */
    public $uri;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * 16 byte Encryption key, 32 hexadecimal characters (required)
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
     * 16 byte initialization vector (required)
     *
     * @param string $iv
     * @return $this
     */
    public function iv(string $iv)
    {
        $this->iv = $iv;

        return $this;
    }

    /**
     * Url of the licensing server
     *
     * @param string $uri
     * @return $this
     */
    public function uri(string $uri)
    {
        $this->uri = $uri;

        return $this;
    }
}

