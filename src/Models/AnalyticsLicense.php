<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLicense extends BitmovinResponse
{
    /** @var string */
    public $name;

    /** @var string */
    public $licenseKey;

    /** @var Carbon */
    public $createdAt;

    /** @var int */
    public $maxImpressions;

    /** @var int */
    public $impressions;

    /** @var \BitmovinApiSdk\Models\AnalyticsLicenseDomain[] */
    public $domains;

    /** @var bool */
    public $ignoreDNT;

    /** @var string */
    public $timeZone;

    /** @var AnalyticsLicenseCustomDataFieldLabels */
    public $customDataFieldLabels;

    /** @var \BitmovinApiSdk\Models\AnalyticsLicenseFeatures */
    public $features;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->domains = ObjectMapper::map($this->domains, AnalyticsLicenseDomain::class);
        $this->customDataFieldLabels = ObjectMapper::map($this->customDataFieldLabels, AnalyticsLicenseCustomDataFieldLabels::class);
        $this->features = ObjectMapper::map($this->features, AnalyticsLicenseFeatures::class);
    }

    /**
     * Name of the Analytics License
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Labels for CustomData fields
     *
     * @param AnalyticsLicenseCustomDataFieldLabels $customDataFieldLabels
     * @return $this
     */
    public function customDataFieldLabels(AnalyticsLicenseCustomDataFieldLabels $customDataFieldLabels)
    {
        $this->customDataFieldLabels = $customDataFieldLabels;

        return $this;
    }

    /**
     * features
     *
     * @param \BitmovinApiSdk\Models\AnalyticsLicenseFeatures $features
     * @return $this
     */
    public function features(\BitmovinApiSdk\Models\AnalyticsLicenseFeatures $features)
    {
        $this->features = $features;

        return $this;
    }
}

