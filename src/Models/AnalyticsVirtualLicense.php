<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsVirtualLicense extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $timezone;

    /** @var string */
    public $retentionTime;

    /** @var string */
    public $compressedRetentionTime;

    /** @var AnalyticsVirtualLicenseLicensesListItem[] */
    public $licenses;

    /** @var int */
    public $customDataFieldsCount;

    /** @var AnalyticsLicenseCustomDataFieldLabels */
    public $customDataFieldLabels;

    /** @var Carbon */
    public $planExpiredAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->licenses = ObjectMapper::map($this->licenses, AnalyticsVirtualLicenseLicensesListItem::class);
        $this->customDataFieldLabels = ObjectMapper::map($this->customDataFieldLabels, AnalyticsLicenseCustomDataFieldLabels::class);
        $this->planExpiredAt = ObjectMapper::map($this->planExpiredAt, Carbon::class);
    }

    /**
     * Name of the Analytics Virtual License
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
     * The timezone of the Analytics Virtual License
     *
     * @param string $timezone
     * @return $this
     */
    public function timezone(string $timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * List of Analytics Licenses
     *
     * @param AnalyticsVirtualLicenseLicensesListItem[] $licenses
     * @return $this
     */
    public function licenses(array $licenses)
    {
        $this->licenses = $licenses;

        return $this;
    }

    /**
     * Labels for Custom Data fields
     *
     * @param AnalyticsLicenseCustomDataFieldLabels $customDataFieldLabels
     * @return $this
     */
    public function customDataFieldLabels(AnalyticsLicenseCustomDataFieldLabels $customDataFieldLabels)
    {
        $this->customDataFieldLabels = $customDataFieldLabels;

        return $this;
    }
}

