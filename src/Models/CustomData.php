<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CustomData extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var mixed */
    public $customData;

    /** @var Carbon */
    public $createdAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
    }

    /**
     * User-specific meta data. This can hold a custom JSON object.
     *
     * @param mixed $customData
     * @return $this
     */
    public function customData(array $customData)
    {
        $this->customData = $customData;

        return $this;
    }

    /**
     * Creation timestamp, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
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

