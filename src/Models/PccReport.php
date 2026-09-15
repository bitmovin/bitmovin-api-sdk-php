<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccReport extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $reportId;

    /** @var string */
    public $generatedAt;

    /** @var PccCompatibilityMatrix */
    public $report;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->report = ObjectMapper::map($this->report, PccCompatibilityMatrix::class);
    }

    /**
     * Identifies this report. A new generation produces a new one. (required)
     *
     * @param string $reportId
     * @return $this
     */
    public function reportId(string $reportId)
    {
        $this->reportId = $reportId;

        return $this;
    }

    /**
     * When the generation that produced this report finished. (required)
     *
     * @param string $generatedAt
     * @return $this
     */
    public function generatedAt(string $generatedAt)
    {
        $this->generatedAt = $generatedAt;

        return $this;
    }

    /**
     * The selected report. By default, pools whose recorded browsers are all pre-release are excluded; includePrerelease retains them. Unknown browser identities do not cause prerelease exclusion. Null where a report is held that this service cannot read, which a generation replaces. (required)
     *
     * @param PccCompatibilityMatrix $report
     * @return $this
     */
    public function report(PccCompatibilityMatrix $report)
    {
        $this->report = $report;

        return $this;
    }
}

