<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AzureAccountRegionSettings extends BitmovinResource
{
    /** @var string */
    public $networkName;

    /** @var string */
    public $subnetName;

    /** @var AzureCloudRegion */
    public $region;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->region = ObjectMapper::map($this->region, AzureCloudRegion::class);
    }

    /**
     * Name of the virtual network (required)
     *
     * @param string $networkName
     * @return $this
     */
    public function networkName(string $networkName)
    {
        $this->networkName = $networkName;

        return $this;
    }

    /**
     * Name of the subnet (required)
     *
     * @param string $subnetName
     * @return $this
     */
    public function subnetName(string $subnetName)
    {
        $this->subnetName = $subnetName;

        return $this;
    }
}

