<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PoisEndpointCredentials extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $username;

    /** @var string */
    public $password;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The username required to authenticate with the POIS server.
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
     * The password required for authentication with the POIS server.
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

