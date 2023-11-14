<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsPublicSigningKeyResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\StreamsPublicSigningKey[] */
    public $publicKeys;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->publicKeys = ObjectMapper::map($this->publicKeys, StreamsPublicSigningKey::class);
    }

    /**
     * publicKeys
     *
     * @param \BitmovinApiSdk\Models\StreamsPublicSigningKey[] $publicKeys
     * @return $this
     */
    public function publicKeys(array $publicKeys)
    {
        $this->publicKeys = $publicKeys;

        return $this;
    }
}

