<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class OciAccount extends BitmovinResource
{
    /** @var string */
    public $tenancyId;

    /** @var string */
    public $compartmentId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The OCID of the tenancy where you intend to run encoding VMs. (required)
     *
     * @param string $tenancyId
     * @return $this
     */
    public function tenancyId(string $tenancyId)
    {
        $this->tenancyId = $tenancyId;

        return $this;
    }

    /**
     * The OCID of the compartment within the tenancy where you intend to run encoding VMs. (required)
     *
     * @param string $compartmentId
     * @return $this
     */
    public function compartmentId(string $compartmentId)
    {
        $this->compartmentId = $compartmentId;

        return $this;
    }
}

