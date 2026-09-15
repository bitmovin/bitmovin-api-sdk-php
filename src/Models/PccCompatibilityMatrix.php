<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccCompatibilityMatrix extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var PccReportView */
    public $view;

    /** @var string */
    public $assembledAt;

    /** @var string[] */
    public $playerVersions;

    /** @var string[] */
    public $runIds;

    /** @var Carbon */
    public $startDate;

    /** @var int */
    public $sessionLimit;

    /** @var \BitmovinApiSdk\Models\PccCoverage */
    public $coverage;

    /** @var \BitmovinApiSdk\Models\PccVerdictLegendEntry[] */
    public $legend;

    /** @var \BitmovinApiSdk\Models\PccHdrLegendEntry[] */
    public $hdrLegend;

    /** @var \BitmovinApiSdk\Models\PccCombination[] */
    public $combinations;

    /** @var \BitmovinApiSdk\Models\PccDevice[] */
    public $devices;

    /** @var \BitmovinApiSdk\Models\PccSummary */
    public $summary;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->view = ObjectMapper::map($this->view, PccReportView::class);
        $this->startDate = ObjectMapper::map($this->startDate, Carbon::class);
        $this->coverage = ObjectMapper::map($this->coverage, PccCoverage::class);
        $this->legend = ObjectMapper::map($this->legend, PccVerdictLegendEntry::class);
        $this->hdrLegend = ObjectMapper::map($this->hdrLegend, PccHdrLegendEntry::class);
        $this->combinations = ObjectMapper::map($this->combinations, PccCombination::class);
        $this->devices = ObjectMapper::map($this->devices, PccDevice::class);
        $this->summary = ObjectMapper::map($this->summary, PccSummary::class);
    }

    /**
     * The effective selection already applied to this matrix, its summary and coverage. (required)
     *
     * @param PccReportView $view
     * @return $this
     */
    public function view(PccReportView $view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * When this report was assembled from what had been measured by then. (required)
     *
     * @param string $assembledAt
     * @return $this
     */
    public function assembledAt(string $assembledAt)
    {
        $this->assembledAt = $assembledAt;

        return $this;
    }

    /**
     * Every Bitmovin Player version that measured any device here. More than one means the measurement spanned a player release, and support is a property of the player and the device together. (required)
     *
     * @param string[] $playerVersions
     * @return $this
     */
    public function playerVersions(array $playerVersions)
    {
        $this->playerVersions = $playerVersions;

        return $this;
    }

    /**
     * UUIDs of matching runs whose job metadata was read, including runs with no included session evidence. Never run names. Quote one to Bitmovin support while the fleet still holds it. The count says nothing about coverage. (required)
     *
     * @param string[] $runIds
     * @return $this
     */
    public function runIds(array $runIds)
    {
        $this->runIds = $runIds;

        return $this;
    }

    /**
     * Inclusive run creation instant in UTC used by this generation, or null for no cutoff. Legacy dates mean midnight UTC. Changing the held cutoff does not alter this report. (required)
     *
     * @param Carbon $startDate
     * @return $this
     */
    public function startDate(Carbon $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Maximum sessions read per pool by this generation. Null for reports produced before a limit was recorded. (required)
     *
     * @param int $sessionLimit
     * @return $this
     */
    public function sessionLimit(int $sessionLimit)
    {
        $this->sessionLimit = $sessionLimit;

        return $this;
    }

    /**
     * coverage
     *
     * @param \BitmovinApiSdk\Models\PccCoverage $coverage
     * @return $this
     */
    public function coverage(\BitmovinApiSdk\Models\PccCoverage $coverage)
    {
        $this->coverage = $coverage;

        return $this;
    }

    /**
     * Every verdict mark and its wording, so the grid reads without this service&#39;s source. (required)
     *
     * @param \BitmovinApiSdk\Models\PccVerdictLegendEntry[] $legend
     * @return $this
     */
    public function legend(array $legend)
    {
        $this->legend = $legend;

        return $this;
    }

    /**
     * The same for the marks an HDR result wears. (required)
     *
     * @param \BitmovinApiSdk\Models\PccHdrLegendEntry[] $hdrLegend
     * @return $this
     */
    public function hdrLegend(array $hdrLegend)
    {
        $this->hdrLegend = $hdrLegend;

        return $this;
    }

    /**
     * combinations
     *
     * @param \BitmovinApiSdk\Models\PccCombination[] $combinations
     * @return $this
     */
    public function combinations(array $combinations)
    {
        $this->combinations = $combinations;

        return $this;
    }

    /**
     * devices
     *
     * @param \BitmovinApiSdk\Models\PccDevice[] $devices
     * @return $this
     */
    public function devices(array $devices)
    {
        $this->devices = $devices;

        return $this;
    }

    /**
     * summary
     *
     * @param \BitmovinApiSdk\Models\PccSummary $summary
     * @return $this
     */
    public function summary(\BitmovinApiSdk\Models\PccSummary $summary)
    {
        $this->summary = $summary;

        return $this;
    }
}

