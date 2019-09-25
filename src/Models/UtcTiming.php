<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class UtcTiming extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $value;

    /** @var string */
    public $schemeIdUri;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The server to get the time from (required)
     *
     * @param string $value
     * @return $this
     */
    public function value(string $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * The scheme id to use. Please refer to the DASH standard. (required)
     *
     * @param string $schemeIdUri
     * @return $this
     */
    public function schemeIdUri(string $schemeIdUri)
    {
        $this->schemeIdUri = $schemeIdUri;

        return $this;
    }
}

