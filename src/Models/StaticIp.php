<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StaticIp extends BitmovinResponse
{
    /** @var string */
    public $ipAddress;

    /** @var string */
    public $infrastructureId;

    /** @var StaticIpStatus */
    public $status;

    /** @var CloudRegion */
    public $region;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, StaticIpStatus::class);
        $this->region = ObjectMapper::map($this->region, CloudRegion::class);
    }

    /**
     * Required if the static IP should be created for an AWS infrastructure account. If this is left blank the static Ip will be created for the managed cloud.
     *
     * @param string $infrastructureId
     * @return $this
     */
    public function infrastructureId(string $infrastructureId)
    {
        $this->infrastructureId = $infrastructureId;

        return $this;
    }

    /**
     * The region of the static Ip (required)
     *
     * @param CloudRegion $region
     * @return $this
     */
    public function region(CloudRegion $region)
    {
        $this->region = $region;

        return $this;
    }
}

