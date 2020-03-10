<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsPercentileQueryRequest extends AnalyticsQueryRequest
{
    /** @var int */
    public $percentile;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The percentage (0-99) used for percentile queries.
     *
     * @param int $percentile
     * @return $this
     */
    public function percentile(int $percentile)
    {
        $this->percentile = $percentile;

        return $this;
    }
}

