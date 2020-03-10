<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Accessibility extends \BitmovinApiSdk\Common\ApiResource
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
     * Can be either list of languages or a complete map of services (or CC channels, in CEA-608 terminology) (required)
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

