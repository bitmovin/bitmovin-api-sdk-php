<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class OciAccountRegionSettings extends BitmovinResource
{
    /** @var string */
    public $subnetId;

    /** @var OciCloudRegion */
    public $region;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->region = ObjectMapper::map($this->region, OciCloudRegion::class);
    }

    /**
     * Id of the VPC subnet for encoding instances. (required)
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

