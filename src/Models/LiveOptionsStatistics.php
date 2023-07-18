<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveOptionsStatistics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveOptionsSummary */
    public $summary;

    /** @var \BitmovinApiSdk\Models\LiveOptionsBreakdownEntry[] */
    public $breakdown;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->summary = ObjectMapper::map($this->summary, LiveOptionsSummary::class);
        $this->breakdown = ObjectMapper::map($this->breakdown, LiveOptionsBreakdownEntry::class);
    }

    /**
     * summary
     *
     * @param \BitmovinApiSdk\Models\LiveOptionsSummary $summary
     * @return $this
     */
    public function summary(\BitmovinApiSdk\Models\LiveOptionsSummary $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Live options statistics aggregated per day (required)
     *
     * @param \BitmovinApiSdk\Models\LiveOptionsBreakdownEntry[] $breakdown
     * @return $this
     */
    public function breakdown(array $breakdown)
    {
        $this->breakdown = $breakdown;

        return $this;
    }
}

