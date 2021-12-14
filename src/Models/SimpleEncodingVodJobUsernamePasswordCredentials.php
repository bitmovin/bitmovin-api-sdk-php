<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobUsernamePasswordCredentials extends SimpleEncodingVodJobCredentials
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
     * The username to be used for authentication. (required)
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
     * The password to be used for authentication (required)
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

