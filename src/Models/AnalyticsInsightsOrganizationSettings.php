<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsInsightsOrganizationSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $orgId;

    /** @var bool */
    public $includeInInsights;

    /** @var string */
    public $industry;

    /** @var string */
    public $subIndustry;

    /** @var bool */
    public $isTrial;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Organization ID
     *
     * @param string $orgId
     * @return $this
     */
    public function orgId(string $orgId)
    {
        $this->orgId = $orgId;

        return $this;
    }

    /**
     * Whether the organization&#39;s data is included in the industry insights
     *
     * @param bool $includeInInsights
     * @return $this
     */
    public function includeInInsights(bool $includeInInsights)
    {
        $this->includeInInsights = $includeInInsights;

        return $this;
    }

    /**
     * Industry of the organization
     *
     * @param string $industry
     * @return $this
     */
    public function industry(string $industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Subindustry of the organization
     *
     * @param string $subIndustry
     * @return $this
     */
    public function subIndustry(string $subIndustry)
    {
        $this->subIndustry = $subIndustry;

        return $this;
    }

    /**
     * Whether the organization is on an analytics trial plan
     *
     * @param bool $isTrial
     * @return $this
     */
    public function isTrial(bool $isTrial)
    {
        $this->isTrial = $isTrial;

        return $this;
    }
}

