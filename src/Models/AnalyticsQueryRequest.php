<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsQueryRequest extends AnalyticsQueryTimeframe
{
    /** @var string */
    public $licenseKey;

    /** @var \BitmovinApiSdk\Models\AnalyticsAbstractFilter[] */
    public $filters;

    /** @var \BitmovinApiSdk\Models\AnalyticsOrderByEntry[] */
    public $orderBy;

    /** @var AnalyticsAttribute */
    public $dimension;

    /** @var AnalyticsInterval */
    public $interval;

    /** @var \BitmovinApiSdk\Models\AnalyticsAttribute[] */
    public $groupBy;

    /** @var bool */
    public $includeContext;

    /** @var int */
    public $limit;

    /** @var int */
    public $offset;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->filters = ObjectMapper::map($this->filters, AnalyticsAbstractFilter::class);
        $this->orderBy = ObjectMapper::map($this->orderBy, AnalyticsOrderByEntry::class);
        $this->dimension = ObjectMapper::map($this->dimension, AnalyticsAttribute::class);
        $this->interval = ObjectMapper::map($this->interval, AnalyticsInterval::class);
        $this->groupBy = ObjectMapper::map($this->groupBy, AnalyticsAttribute::class);
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
     * @param \BitmovinApiSdk\Models\AnalyticsAbstractFilter[] $filters
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
     * @param \BitmovinApiSdk\Models\AnalyticsOrderByEntry[] $orderBy
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
     * @param AnalyticsAttribute $dimension
     * @return $this
     */
    public function dimension(AnalyticsAttribute $dimension)
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
     * @param \BitmovinApiSdk\Models\AnalyticsAttribute[] $groupBy
     * @return $this
     */
    public function groupBy(array $groupBy)
    {
        $this->groupBy = $groupBy;

        return $this;
    }

    /**
     * Whether context data should be included in the response
     *
     * @param bool $includeContext
     * @return $this
     */
    public function includeContext(bool $includeContext)
    {
        $this->includeContext = $includeContext;

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

