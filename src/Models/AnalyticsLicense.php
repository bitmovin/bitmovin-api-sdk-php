<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLicense extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var Carbon */
    public $createdAt;

    /** @var mixed */
    public $customData;

    /** @var string */
    public $licenseKey;

    /** @var string */
    public $name;

    /** @var string */
    public $industry;

    /** @var string */
    public $subIndustry;

    /** @var bool */
    public $ignoreDNT;

    /** @var int */
    public $impressions;

    /** @var int */
    public $maxImpressions;

    /** @var string */
    public $timeZone;

    /** @var string */
    public $retentionTime;

    /** @var \BitmovinApiSdk\Models\AnalyticsLicenseDomain[] */
    public $domains;

    /** @var bool */
    public $includeInInsights;

    /** @var AnalyticsLicenseCustomDataFieldLabels */
    public $customDataFieldLabels;

    /** @var int */
    public $customDataFieldsCount;

    /** @var int */
    public $orderIndex;

    /** @var string */
    public $rateLimit;

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
     * Whether the Do Not Track request from the browser should be ignored
     *
     * @param bool $ignoreDNT
     * @return $this
     */
    public function ignoreDNT(bool $ignoreDNT)
    {
        $this->ignoreDNT = $ignoreDNT;

        return $this;
    }

    /**
     * The timezone of the Analytics License
     *
     * @param string $timeZone
     * @return $this
     */
    public function timeZone(string $timeZone)
    {
        $this->timeZone = $timeZone;

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
     * The rate limit of this license
     *
     * @param string $rateLimit
     * @return $this
     */
    public function rateLimit(string $rateLimit)
    {
        $this->rateLimit = $rateLimit;

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

