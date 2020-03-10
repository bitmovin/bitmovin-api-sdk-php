<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WidevineDrm extends Drm
{
    /** @var string */
    public $key;

    /** @var string */
    public $kid;

    /** @var string */
    public $pssh;

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
     * 16 byte Key id, 32 hexadecimal characters (required)
     *
     * @param string $kid
     * @return $this
     */
    public function kid(string $kid)
    {
        $this->kid = $kid;

        return $this;
    }

    /**
     * Base 64 Encoded (required)
     *
     * @param string $pssh
     * @return $this
     */
    public function pssh(string $pssh)
    {
        $this->pssh = $pssh;

        return $this;
    }
}

