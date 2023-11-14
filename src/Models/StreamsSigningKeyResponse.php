<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsSigningKeyResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $privateKey;

    /** @var string */
    public $keyId;

    /** @var string */
    public $message;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * base64-encoded PEM file of the private key
     *
     * @param string $privateKey
     * @return $this
     */
    public function privateKey(string $privateKey)
    {
        $this->privateKey = $privateKey;

        return $this;
    }

    /**
     * The unique identifier of the key
     *
     * @param string $keyId
     * @return $this
     */
    public function keyId(string $keyId)
    {
        $this->keyId = $keyId;

        return $this;
    }

    /**
     * message
     *
     * @param string $message
     * @return $this
     */
    public function message(string $message)
    {
        $this->message = $message;

        return $this;
    }
}

