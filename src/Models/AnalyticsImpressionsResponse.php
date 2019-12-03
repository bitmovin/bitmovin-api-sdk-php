<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsImpressionsResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AnalyticsImpressionListItem[] */
    public $impressions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->impressions = ObjectMapper::map($this->impressions, AnalyticsImpressionListItem::class);
    }

    /**
     * impressions
     *
     * @param \BitmovinApiSdk\Models\AnalyticsImpressionListItem[] $impressions
     * @return $this
     */
    public function impressions(array $impressions)
    {
        $this->impressions = $impressions;

        return $this;
    }
}

