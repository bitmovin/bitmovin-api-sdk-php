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

    /** @var \BitmovinApiSdk\Models\InvitationStatus */
    public $invitationStatus;

    /** @var \BitmovinApiSdk\Models\TenantGroupDetail[] */
    public $groups;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->invitationStatus = ObjectMapper::map($this->invitationStatus, InvitationStatus::class);
        $this->groups = ObjectMapper::map($this->groups, TenantGroupDetail::class);
    }

    /**
     * Id of Tenant
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
     * Email of Tenant
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
     * invitationStatus
     *
     * @param \BitmovinApiSdk\Models\InvitationStatus $invitationStatus
     * @return $this
     */
    public function invitationStatus(\BitmovinApiSdk\Models\InvitationStatus $invitationStatus)
    {
        $this->invitationStatus = $invitationStatus;

        return $this;
    }

    /**
     * List of all groups of Tenant
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

