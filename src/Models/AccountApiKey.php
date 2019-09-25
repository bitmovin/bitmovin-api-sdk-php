<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AccountApiKey extends BitmovinResource
{
    /** @var string */
    public $value;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Key value for authentication with the Bitmovin API (required)
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

