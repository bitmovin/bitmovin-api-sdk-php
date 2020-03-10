<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Acl extends BitmovinResource
{
    /** @var string */
    public $resource;

    /** @var \BitmovinApiSdk\Models\Policy */
    public $policy;

    /** @var \BitmovinApiSdk\Models\Permission[] */
    public $permissions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->policy = ObjectMapper::map($this->policy, Policy::class);
        $this->permissions = ObjectMapper::map($this->permissions, Permission::class);
    }

    /**
     * Resource to define the permission for. (required)
     *
     * @param string $resource
     * @return $this
     */
    public function resource(string $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * policy
     *
     * @param \BitmovinApiSdk\Models\Policy $policy
     * @return $this
     */
    public function policy(\BitmovinApiSdk\Models\Policy $policy)
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * Permissions to assign. (required)
     *
     * @param \BitmovinApiSdk\Models\Permission[] $permissions
     * @return $this
     */
    public function permissions(array $permissions)
    {
        $this->permissions = $permissions;

        return $this;
    }
}

