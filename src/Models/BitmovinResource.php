<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BitmovinResource extends BitmovinResponse
{
    /** @var string */
    public $name;

    /** @var string */
    public $description;

    /** @var Carbon */
    public $createdAt;

    /** @var Carbon */
    public $modifiedAt;

    /** @var mixed */
    public $customData;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->modifiedAt = ObjectMapper::map($this->modifiedAt, Carbon::class);
    }

    /**
     * Name of the resource. Can be freely chosen by the user.
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Description of the resource. Can be freely chosen by the user.
     *
     * @param string $description
     * @return $this
     */
    public function description(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * User-specific meta data. This can hold anything.
     *
     * @param mixed $customData
     * @return $this
     */
    public function customData(array $customData)
    {
        $this->customData = $customData;

        return $this;
    }
}

