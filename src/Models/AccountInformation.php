<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AccountInformation extends BitmovinResource
{
    /** @var string */
    public $email;

    /** @var \BitmovinApiSdk\Models\AccountApiKey[] */
    public $apiKeys;

    /** @var string */
    public $firstName;

    /** @var string */
    public $lastName;

    /** @var string */
    public $phone;

    /** @var string */
    public $company;

    /** @var bool */
    public $verified;

    /** @var Marketplace */
    public $marketplace;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->apiKeys = ObjectMapper::map($this->apiKeys, AccountApiKey::class);
        $this->marketplace = ObjectMapper::map($this->marketplace, Marketplace::class);
    }

    /**
     * First name of the tenant.
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
     * Last name of the tenant.
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
     * Phone number of the tenant.
     *
     * @param string $phone
     * @return $this
     */
    public function phone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Company name of the tenant.
     *
     * @param string $company
     * @return $this
     */
    public function company(string $company)
    {
        $this->company = $company;

        return $this;
    }
}

