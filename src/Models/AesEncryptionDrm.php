<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AesEncryptionDrm extends Drm
{
    /** @var string */
    public $key;

    /** @var string */
    public $iv;

    /** @var string */
    public $keyFileUri;

    /** @var AesEncryptionMethod */
    public $method;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->method = ObjectMapper::map($this->method, AesEncryptionMethod::class);
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
     * 16 byte initialization vector
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
     * Path relative to the output for referencing in the manifest. If this value is not set the key file will be written automatically to the output folder.
     *
     * @param string $keyFileUri
     * @return $this
     */
    public function keyFileUri(string $keyFileUri)
    {
        $this->keyFileUri = $keyFileUri;

        return $this;
    }

    /**
     * method
     *
     * @param AesEncryptionMethod $method
     * @return $this
     */
    public function method(AesEncryptionMethod $method)
    {
        $this->method = $method;

        return $this;
    }
}

