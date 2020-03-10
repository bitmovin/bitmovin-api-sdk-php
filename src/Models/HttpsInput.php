<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HttpsInput extends Input
{
    /** @var string */
    public $host;

    /** @var string */
    public $username;

    /** @var string */
    public $password;

    /** @var int */
    public $port;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Host Url or IP of the HTTP server (required)
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
     * Basic Auth Username, if required
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
     * Basic Auth Password, if required
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
     * Custom Port
     *
     * @param int $port
     * @return $this
     */
    public function port(int $port)
    {
        $this->port = $port;

        return $this;
    }
}

