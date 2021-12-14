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

    /** @var \BitmovinApiSdk\Models\Label[] */
    public $labels;

    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "VIDEO" => VideoAdaptationSet::class,
        "AUDIO" => AudioAdaptationSet::class,
        "IMAGE" => ImageAdaptationSet::class,
        "SUBTITLE" => SubtitleAdaptationSet::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->customAttributes = ObjectMapper::map($this->customAttributes, CustomAttribute::class);
        $this->roles = ObjectMapper::map($this->roles, AdaptationSetRole::class);
        $this->accessibilities = ObjectMapper::map($this->accessibilities, Accessibility::class);
        $this->labels = ObjectMapper::map($this->labels, Label::class);
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

    /**
     * List of labels
     *
     * @param \BitmovinApiSdk\Models\Label[] $labels
     * @return $this
     */
    public function labels(array $labels)
    {
        $this->labels = $labels;

        return $this;
    }
}

