<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CustomAttribute extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $key;

    /** @var string */
    public $value;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * unique string identifier for the custom attribute (required)
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
     * value of the custom attribute
     *
     * @param string $value
     * @return $this
     */
    public function value(string $value)
    {
        $this->value = $value;

        return $this;
    }
}

