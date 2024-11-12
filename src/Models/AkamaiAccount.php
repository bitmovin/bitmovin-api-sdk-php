<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AkamaiAccount extends BitmovinResource
{
    /** @var string */
    public $apiToken;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Akamai/Linode API token (required)
     *
     * @param string $apiToken
     * @return $this
     */
    public function apiToken(string $apiToken)
    {
        $this->apiToken = $apiToken;

        return $this;
    }
}

