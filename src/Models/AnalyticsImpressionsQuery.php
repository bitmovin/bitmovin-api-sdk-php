<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsImpressionsQuery extends AnalyticsQueryTimeframe
{
    /** @var string */
    public $licenseKey;

    /** @var \BitmovinApiSdk\Models\AnalyticsAbstractFilter[] */
    public $filters;

    /** @var int */
    public $limit;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->filters = ObjectMapper::map($this->filters, AnalyticsAbstractFilter::class);
    }

    /**
     * Analytics license key
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
     * Number of returned impressions
     *
     * @param int $limit
     * @return $this
     */
    public function limit(int $limit)
    {
        $this->limit = $limit;

        return $this;
    }
}

