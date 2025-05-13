<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Metadata extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $version;

    /** @var string */
    public $disclaimer;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * version
     *
     * @param string $version
     * @return $this
     */
    public function version(string $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * disclaimer
     *
     * @param string $disclaimer
     * @return $this
     */
    public function disclaimer(string $disclaimer)
    {
        $this->disclaimer = $disclaimer;

        return $this;
    }
}

