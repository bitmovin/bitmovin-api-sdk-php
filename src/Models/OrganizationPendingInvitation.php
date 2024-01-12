<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class OrganizationPendingInvitation extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $email;

    /** @var string */
    public $groupId;

    /** @var string */
    public $groupName;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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
     * Id of group (required)
     *
     * @param string $groupId
     * @return $this
     */
    public function groupId(string $groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Name of group (required)
     *
     * @param string $groupName
     * @return $this
     */
    public function groupName(string $groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }
}

