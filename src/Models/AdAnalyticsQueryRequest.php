<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdAnalyticsQueryRequest extends AnalyticsQueryTimeframe
{
    /** @var string */
    public $licenseKey;

    /** @var \BitmovinApiSdk\Models\AdAnalyticsAbstractFilter[] */
    public $filters;

    /** @var \BitmovinApiSdk\Models\AdAnalyticsOrderByEntry[] */
    public $orderBy;

    /** @var \BitmovinApiSdk\Models\AdAnalyticsAttribute */
    public $dimension;

    /** @var AnalyticsInterval */
    public $interval;

    /** @var \BitmovinApiSdk\Models\AdAnalyticsAttribute[] */
    public $groupBy;

    /** @var int */
    public $limit;

    /** @var int */
    public $offset;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->filters = ObjectMapper::map($this->filters, AdAnalyticsAbstractFilter::class);
        $this->orderBy = ObjectMapper::map($this->orderBy, AdAnalyticsOrderByEntry::class);
        $this->dimension = ObjectMapper::map($this->dimension, AdAnalyticsAttribute::class);
        $this->interval = ObjectMapper::map($this->interval, AnalyticsInterval::class);
        $this->groupBy = ObjectMapper::map($this->groupBy, AdAnalyticsAttribute::class);
    }

    /**
     * Analytics license key (required)
     *
     * @param string $licenseKey
     * @return $this
     */
    public function licenseKey(string $licenseKey)
    {
        $this->licenseKey = $licenseKey;

        return $this;
    }

    /**
     * filters
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsAbstractFilter[] $filters
     * @return $this
     */
    public function filters(array $filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * orderBy
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsOrderByEntry[] $orderBy
     * @return $this
     */
    public function orderBy(array $orderBy)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * dimension
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsAttribute $dimension
     * @return $this
     */
    public function dimension(\BitmovinApiSdk\Models\AdAnalyticsAttribute $dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * interval
     *
     * @param AnalyticsInterval $interval
     * @return $this
     */
    public function interval(AnalyticsInterval $interval)
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * groupBy
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsAttribute[] $groupBy
     * @return $this
     */
    public function groupBy(array $groupBy)
    {
        $this->groupBy = $groupBy;

        return $this;
    }

    /**
     * Maximum number of rows returned (max. 200)
     *
     * @param int $limit
     * @return $this
     */
    public function limit(int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Offset of data
     *
     * @param int $offset
     * @return $this
     */
    public function offset(int $offset)
    {
        $this->offset = $offset;

        return $this;
    }
}

