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

    /** @var bool */
    public $mfaEnabled;

    /** @var string */
    public $intercomIdVerification;

    /** @var string */
    public $samlDomain;

    /** @var bool */
    public $tosAccepted;

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

    /**
     * Whether the user has accepted the Terms of Service. Users created via SAML SSO start as &#x60;false&#x60; because the SAML flow bypasses the registration form that normally captures TOS acceptance; all other signup paths default to &#x60;true&#x60;. Acceptance is one-way: sending &#x60;true&#x60; accepts the TOS, sending &#x60;false&#x60; is ignored.
     *
     * @param bool $tosAccepted
     * @return $this
     */
    public function tosAccepted(bool $tosAccepted)
    {
        $this->tosAccepted = $tosAccepted;

        return $this;
    }
}

