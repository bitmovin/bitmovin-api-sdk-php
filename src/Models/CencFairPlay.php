<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CencFairPlay extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $iv;

    /** @var string */
    public $uri;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Initialization vector as hexadecimal string
     *
     * @param string $iv
     * @return $this
     */
    public function iv(string $iv)
    {
        $this->iv = $iv;

        return $this;
    }

    /**
     * URL of the licensing server
     *
     * @param string $uri
     * @return $this
     */
    public function uri(string $uri)
    {
        $this->uri = $uri;

        return $this;
    }
}

