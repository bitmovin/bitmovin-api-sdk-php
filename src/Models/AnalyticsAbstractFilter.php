<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsAbstractFilter extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AnalyticsAttribute */
    public $name;

    public static $discriminatorName = "operator";
    public static $discriminatorMapping = [
        "IN" => AnalyticsInFilter::class,
        "EQ" => AnalyticsEqualFilter::class,
        "NE" => AnalyticsNotEqualFilter::class,
        "LT" => AnalyticsLessThanFilter::class,
        "LTE" => AnalyticsLessThanOrEqualFilter::class,
        "GT" => AnalyticsGreaterThanFilter::class,
        "GTE" => AnalyticsGreaterThanOrEqualFilter::class,
        "CONTAINS" => AnalyticsContainsFilter::class,
        "NOTCONTAINS" => AnalyticsNotContainsFilter::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->name = ObjectMapper::map($this->name, AnalyticsAttribute::class);
    }

    /**
     * name
     *
     * @param AnalyticsAttribute $name
     * @return $this
     */
    public function name(AnalyticsAttribute $name)
    {
        $this->name = $name;

        return $this;
    }
}

