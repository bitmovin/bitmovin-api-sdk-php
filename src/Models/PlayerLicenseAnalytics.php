<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlayerLicenseAnalytics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $analyticsKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Analytics License Key (required)
     *
     * @param string $analyticsKey
     * @return $this
     */
    public function analyticsKey(string $analyticsKey)
    {
        $this->analyticsKey = $analyticsKey;

        return $this;
    }
}

