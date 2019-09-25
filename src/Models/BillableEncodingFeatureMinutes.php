<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BillableEncodingFeatureMinutes extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $featureType;

    /** @var float */
    public $encodedMinutes;

    /** @var float */
    public $featureMultiplier;

    /** @var float */
    public $billableMinutes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The name of the feature.
     *
     * @param string $featureType
     * @return $this
     */
    public function featureType(string $featureType)
    {
        $this->featureType = $featureType;

        return $this;
    }

    /**
     * Encoded minutes related to this feature.
     *
     * @param float $encodedMinutes
     * @return $this
     */
    public function encodedMinutes(float $encodedMinutes)
    {
        $this->encodedMinutes = $encodedMinutes;

        return $this;
    }

    /**
     * The multiplier used for this feature.
     *
     * @param float $featureMultiplier
     * @return $this
     */
    public function featureMultiplier(float $featureMultiplier)
    {
        $this->featureMultiplier = $featureMultiplier;

        return $this;
    }

    /**
     * The billable minutes related to this feature.
     *
     * @param float $billableMinutes
     * @return $this
     */
    public function billableMinutes(float $billableMinutes)
    {
        $this->billableMinutes = $billableMinutes;

        return $this;
    }
}

