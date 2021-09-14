<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLicenseFeatures extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AnalyticsLicenseErrorDetailsConfig */
    public $errorDetails;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->errorDetails = ObjectMapper::map($this->errorDetails, AnalyticsLicenseErrorDetailsConfig::class);
    }

    /**
     * errorDetails
     *
     * @param \BitmovinApiSdk\Models\AnalyticsLicenseErrorDetailsConfig $errorDetails
     * @return $this
     */
    public function errorDetails(\BitmovinApiSdk\Models\AnalyticsLicenseErrorDetailsConfig $errorDetails)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }
}

