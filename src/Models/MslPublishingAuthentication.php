<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MslPublishingAuthentication extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $enabled;

    /** @var string */
    public $username;

    /** @var string */
    public $password;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Whether HTTP Digest publishing authentication is enabled. (required)
     *
     * @param bool $enabled
     * @return $this
     */
    public function enabled(bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * HTTP Digest username for publishing MSL5 segments. Required when &#x60;enabled&#x60; is &#x60;true&#x60;.
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
     * HTTP Digest password for publishing MSL5 segments. Required when &#x60;enabled&#x60; is &#x60;true&#x60;.
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

