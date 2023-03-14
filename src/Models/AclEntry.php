<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AclEntry extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $scope;

    /** @var AclPermission */
    public $permission;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->permission = ObjectMapper::map($this->permission, AclPermission::class);
    }

    /**
     * Deprecation notice: The value of this property is not being used. It can be chosen arbitrarily or not set at all
     *
     * @param string $scope
     * @return $this
     */
    public function scope(string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * permission
     *
     * @param AclPermission $permission
     * @return $this
     */
    public function permission(AclPermission $permission)
    {
        $this->permission = $permission;

        return $this;
    }
}

