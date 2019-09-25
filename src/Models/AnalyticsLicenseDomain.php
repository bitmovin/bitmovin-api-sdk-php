<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLicenseDomain extends BitmovinResponse
{
    /** @var string */
    public $url;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * url
     *
     * @param string $url
     * @return $this
     */
    public function url(string $url)
    {
        $this->url = $url;

        return $this;
    }
}

