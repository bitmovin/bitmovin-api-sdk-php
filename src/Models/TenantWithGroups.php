<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TenantWithGroups extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $email;

    /** @var \BitmovinApiSdk\Models\TenantGroupDetail[] */
    public $groups;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->groups = ObjectMapper::map($this->groups, TenantGroupDetail::class);
    }

    /**
     * Id of Tenant (required)
     *
     * @param string $id
     * @return $this
     */
    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Email of Tenant (required)
     *
     * @param string $email
     * @return $this
     */
    public function email(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * List of all groups of Tenant (required)
     *
     * @param \BitmovinApiSdk\Models\TenantGroupDetail[] $groups
     * @return $this
     */
    public function groups(array $groups)
    {
        $this->groups = $groups;

        return $this;
    }
}

