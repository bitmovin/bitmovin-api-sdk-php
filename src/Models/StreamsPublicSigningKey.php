<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsPublicSigningKey extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $keyId;

    /** @var Carbon */
    public $createdAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
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
     * createdAt
     *
     * @param Carbon $createdAt
     * @return $this
     */
    public function createdAt(Carbon $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

