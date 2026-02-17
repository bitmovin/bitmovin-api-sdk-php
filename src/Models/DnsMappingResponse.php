<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DnsMappingResponse extends BitmovinResource
{
    /** @var string */
    public $subdomain;

    /** @var string */
    public $hostname;

    /** @var string */
    public $encodingId;

    /** @var string */
    public $ip;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Subdomain used for the DNS mapping
     *
     * @param string $subdomain
     * @return $this
     */
    public function subdomain(string $subdomain)
    {
        $this->subdomain = $subdomain;

        return $this;
    }
}

