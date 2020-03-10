<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Invitation extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $email;

    /** @var \BitmovinApiSdk\Models\InvitationStatus */
    public $status;

    /** @var string */
    public $company;

    /** @var string */
    public $firstName;

    /** @var string */
    public $lastName;

    /** @var Carbon */
    public $createdAt;

    /** @var string */
    public $jobTitle;

    /** @var string */
    public $phone;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, InvitationStatus::class);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
    }

    /**
     * id
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
     * Email address of the tenant. (required)
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
     * status
     *
     * @param \BitmovinApiSdk\Models\InvitationStatus $status
     * @return $this
     */
    public function status(\BitmovinApiSdk\Models\InvitationStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * company
     *
     * @param string $company
     * @return $this
     */
    public function company(string $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function firstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function lastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Creation date of the invitation in UTC format
     *
     * @param Carbon $createdAt
     * @return $this
     */
    public function createdAt(Carbon $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * jobTitle
     *
     * @param string $jobTitle
     * @return $this
     */
    public function jobTitle(string $jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * phone
     *
     * @param string $phone
     * @return $this
     */
    public function phone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }
}

