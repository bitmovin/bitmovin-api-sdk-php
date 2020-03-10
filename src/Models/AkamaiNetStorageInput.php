<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AkamaiNetStorageInput extends Input
{
    /** @var string */
    public $host;

    /** @var string */
    public $username;

    /** @var string */
    public $password;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Host to use for Akamai NetStorage transfers (required)
     *
     * @param string $host
     * @return $this
     */
    public function host(string $host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Your Akamai NetStorage Username (required)
     *
     * @param string $username
     * @return $this
     */
    public function username(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Your Akamai NetStorage password (required)
     *
     * @param string $password
     * @return $this
     */
    public function password(string $password)
    {
        $this->password = $password;

        return $this;
    }
}

