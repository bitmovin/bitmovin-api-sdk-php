<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AsperaInput extends Input
{
    /** @var string */
    public $minBandwidth;

    /** @var string */
    public $maxBandwidth;

    /** @var string */
    public $host;

    /** @var string */
    public $username;

    /** @var string */
    public $password;

    /** @var string */
    public $token;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Minimal download bandwidth. Examples: 100k, 100m, 100g
     *
     * @param string $minBandwidth
     * @return $this
     */
    public function minBandwidth(string $minBandwidth)
    {
        $this->minBandwidth = $minBandwidth;

        return $this;
    }

    /**
     * Maximal download bandwidth. Examples: 100k, 100m, 100g
     *
     * @param string $maxBandwidth
     * @return $this
     */
    public function maxBandwidth(string $maxBandwidth)
    {
        $this->maxBandwidth = $maxBandwidth;

        return $this;
    }

    /**
     * Host to use for Aspera transfers (required)
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
     * Username to log into Aspera host (either password and user must be set or token)
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
     * corresponding password (either password and user must be set or token)
     *
     * @param string $password
     * @return $this
     */
    public function password(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Token used for authentication (either password and user must be set or token)
     *
     * @param string $token
     * @return $this
     */
    public function token(string $token)
    {
        $this->token = $token;

        return $this;
    }
}

