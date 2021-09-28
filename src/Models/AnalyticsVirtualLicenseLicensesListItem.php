<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsVirtualLicenseLicensesListItem extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $licenseKey;

    /** @var string */
    public $orgId;

    /** @var string */
    public $name;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Analytics License key
     *
     * @param string $licenseKey
     * @return $this
     */
    public function licenseKey(string $licenseKey)
    {
        $this->licenseKey = $licenseKey;

        return $this;
    }

    /**
     * Organisation Id of license
     *
     * @param string $orgId
     * @return $this
     */
    public function orgId(string $orgId)
    {
        $this->orgId = $orgId;

        return $this;
    }
}

