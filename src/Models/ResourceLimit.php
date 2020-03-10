<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ResourceLimit extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var string */
    public $value;

    /** @var string */
    public $effectiveValue;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * name
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
     * value
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

