<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLicenseKey extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $licenseKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Analytics License Key (required)
     *
     * @param string $licenseKey
     * @return $this
     */
    public function licenseKey(string $licenseKey)
    {
        $this->licenseKey = $licenseKey;

        return $this;
    }
}

