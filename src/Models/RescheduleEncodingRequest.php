<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class RescheduleEncodingRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $infrastructureId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
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
}

