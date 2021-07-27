<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class GceAccountRegionSettings extends BitmovinResource
{
    /** @var string */
    public $network;

    /** @var string */
    public $subnetId;

    /** @var GoogleCloudRegion */
    public $region;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->region = ObjectMapper::map($this->region, GoogleCloudRegion::class);
    }

    /**
     * Id of the network for encoding instances (required)
     *
     * @param string $network
     * @return $this
     */
    public function network(string $network)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * Id of the subnet for encoding instances (required)
     *
     * @param string $subnetId
     * @return $this
     */
    public function subnetId(string $subnetId)
    {
        $this->subnetId = $subnetId;

        return $this;
    }
}

