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
     * scope
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

