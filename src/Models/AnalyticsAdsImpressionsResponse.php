<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsAdsImpressionsResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AnalyticsAdsImpressionSample[] */
    public $adsImpressions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->adsImpressions = ObjectMapper::map($this->adsImpressions, AnalyticsAdsImpressionSample::class);
    }

    /**
     * adsImpressions
     *
     * @param \BitmovinApiSdk\Models\AnalyticsAdsImpressionSample[] $adsImpressions
     * @return $this
     */
    public function adsImpressions(array $adsImpressions)
    {
        $this->adsImpressions = $adsImpressions;

        return $this;
    }
}

