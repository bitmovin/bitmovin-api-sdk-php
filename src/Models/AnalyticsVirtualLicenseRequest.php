<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsVirtualLicenseRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var string */
    public $timezone;

    /** @var AnalyticsVirtualLicenseLicensesListItem[] */
    public $licenses;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->licenses = ObjectMapper::map($this->licenses, AnalyticsVirtualLicenseLicensesListItem::class);
    }

    /**
     * Name of the Analytics Virtual License (required)
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
     * The timezone of the Analytics Virtual License (required)
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
     * List of Analytics Licenses (required)
     *
     * @param AnalyticsVirtualLicenseLicensesListItem[] $licenses
     * @return $this
     */
    public function licenses(array $licenses)
    {
        $this->licenses = $licenses;

        return $this;
    }
}

