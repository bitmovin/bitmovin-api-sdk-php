<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InfrastructureSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $infrastructureId;

    /** @var CloudRegion */
    public $cloudRegion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, CloudRegion::class);
    }

    /**
     * Id of a custom infrastructure, e.g., Kubernetes Cluster
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
     * cloudRegion
     *
     * @param CloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(CloudRegion $cloudRegion)
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }
}

