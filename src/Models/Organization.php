<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Organization extends BitmovinResource
{
    /** @var OrganizationType */
    public $type;

    /** @var string */
    public $parentId;

    /** @var string */
    public $labelColor;

    /** @var \BitmovinApiSdk\Models\ResourceLimitContainer[] */
    public $limitsPerResource;

    /** @var SignupSource */
    public $signupSource;

    /** @var bool */
    public $mfaRequired;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, OrganizationType::class);
        $this->limitsPerResource = ObjectMapper::map($this->limitsPerResource, ResourceLimitContainer::class);
        $this->signupSource = ObjectMapper::map($this->signupSource, SignupSource::class);
    }

    /**
     * Specifies the type of the organization in the hierachy. Only sub-organizations can be newly created. (required)
     *
     * @param OrganizationType $type
     * @return $this
     */
    public function type(OrganizationType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Hexadecimal color
     *
     * @param string $labelColor
     * @return $this
     */
    public function labelColor(string $labelColor)
    {
        $this->labelColor = $labelColor;

        return $this;
    }

    /**
     * limitsPerResource
     *
     * @param \BitmovinApiSdk\Models\ResourceLimitContainer[] $limitsPerResource
     * @return $this
     */
    public function limitsPerResource(array $limitsPerResource)
    {
        $this->limitsPerResource = $limitsPerResource;

        return $this;
    }
}

