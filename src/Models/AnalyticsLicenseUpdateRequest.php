<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLicenseUpdateRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var bool */
    public $ignoreDNT;

    /** @var string */
    public $timeZone;

    /** @var AnalyticsLicenseCustomDataFieldLabels */
    public $customDataFieldLabels;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->customDataFieldLabels = ObjectMapper::map($this->customDataFieldLabels, AnalyticsLicenseCustomDataFieldLabels::class);
    }

    /**
     * name
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
     * ignoreDNT
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
     * timeZone
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
}

