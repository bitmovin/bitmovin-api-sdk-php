<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class VirtualLicense extends BitmovinResponse
{
    /** @var string */
    public $name;

    /** @var string */
    public $timezone;

    /** @var VirtualLicenseLicensesListItem[] */
    public $licenses;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->licenses = ObjectMapper::map($this->licenses, VirtualLicenseLicensesListItem::class);
    }

    /**
     * Name of the Virtual License
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
     * The timezone of the Virtual License
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
     * @param VirtualLicenseLicensesListItem[] $licenses
     * @return $this
     */
    public function licenses(array $licenses)
    {
        $this->licenses = $licenses;

        return $this;
    }
}

