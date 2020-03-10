<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdaptationSet extends BitmovinResponse
{
    /** @var \BitmovinApiSdk\Models\CustomAttribute[] */
    public $customAttributes;

    /** @var \BitmovinApiSdk\Models\AdaptationSetRole[] */
    public $roles;

    /** @var \BitmovinApiSdk\Models\Accessibility[] */
    public $accessibilities;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->customAttributes = ObjectMapper::map($this->customAttributes, CustomAttribute::class);
        $this->roles = ObjectMapper::map($this->roles, AdaptationSetRole::class);
        $this->accessibilities = ObjectMapper::map($this->accessibilities, Accessibility::class);
    }

    /**
     * Custom adaptation set attributes
     *
     * @param \BitmovinApiSdk\Models\CustomAttribute[] $customAttributes
     * @return $this
     */
    public function customAttributes(array $customAttributes)
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * Roles of the adaptation set
     *
     * @param \BitmovinApiSdk\Models\AdaptationSetRole[] $roles
     * @return $this
     */
    public function roles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Provide signaling of CEA 607 and CEA 708
     *
     * @param \BitmovinApiSdk\Models\Accessibility[] $accessibilities
     * @return $this
     */
    public function accessibilities(array $accessibilities)
    {
        $this->accessibilities = $accessibilities;

        return $this;
    }
}

