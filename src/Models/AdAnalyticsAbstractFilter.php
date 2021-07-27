<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdAnalyticsAbstractFilter extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AdAnalyticsAttribute */
    public $name;

    public static $discriminatorName = "operator";
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
     * @param AdAnalyticsAttribute $name
     * @return $this
     */
    public function name(AdAnalyticsAttribute $name)
    {
        $this->name = $name;

        return $this;
    }
}

