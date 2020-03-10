<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CustomWebPlayerBuildDomain extends BitmovinResource
{
    /** @var string */
    public $domain;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Domain where the player is allowed to play (required)
     *
     * @param string $domain
     * @return $this
     */
    public function domain(string $domain)
    {
        $this->domain = $domain;

        return $this;
    }
}

