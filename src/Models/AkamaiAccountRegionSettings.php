<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AkamaiAccountRegionSettings extends BitmovinResource
{
    /** @var int */
    public $subnetId;

    /** @var int */
    public $firewallId;

    /** @var AkamaiCloudRegion */
    public $region;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->region = ObjectMapper::map($this->region, AkamaiCloudRegion::class);
    }

    /**
     * Id of the VPC subnet for encoding instances (required)
     *
     * @param int $subnetId
     * @return $this
     */
    public function subnetId(int $subnetId)
    {
        $this->subnetId = $subnetId;

        return $this;
    }

    /**
     * Id of the firewall for encoding instances (required)
     *
     * @param int $firewallId
     * @return $this
     */
    public function firewallId(int $firewallId)
    {
        $this->firewallId = $firewallId;

        return $this;
    }
}

