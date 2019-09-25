<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdAnalyticsAbstractFilter extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AdAnalyticsAttribute */
    public $name;

    public static $discriminatorMapping = [
        "IN" => AdAnalyticsInFilter::class,
        "EQ" => AdAnalyticsEqualFilter::class,
        "NE" => AdAnalyticsNotEqualFilter::class,
        "LT" => AdAnalyticsLessThanFilter::class,
        "LTE" => AdAnalyticsLessThanOrEqualFilter::class,
        "GT" => AdAnalyticsGreaterThanFilter::class,
        "GTE" => AdAnalyticsGreaterThanOrEqualFilter::class,
        "CONTAINS" => AdAnalyticsContainsFilter::class,
        "NOTCONTAINS" => AdAnalyticsNotContainsFilter::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->name = ObjectMapper::map($this->name, AdAnalyticsAttribute::class);
    }

    /**
     * name
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsAttribute $name
     * @return $this
     */
    public function name(\BitmovinApiSdk\Models\AdAnalyticsAttribute $name)
    {
        $this->name = $name;

        return $this;
    }
}

