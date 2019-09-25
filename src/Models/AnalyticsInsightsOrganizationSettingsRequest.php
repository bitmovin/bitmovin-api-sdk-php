<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsInsightsOrganizationSettingsRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $includeInInsights;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Whether the organization&#39;s data is being contributed to industry insights
     *
     * @param bool $includeInInsights
     * @return $this
     */
    public function includeInInsights(bool $includeInInsights)
    {
        $this->includeInInsights = $includeInInsights;

        return $this;
    }
}

