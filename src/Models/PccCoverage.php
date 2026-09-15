<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccCoverage extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $devicesBeforeView;

    /** @var int */
    public $devicesExcludedByDeviceFilter;

    /** @var int */
    public $devicesExcludedAsUnreported;

    /** @var int */
    public $devicesExcludedAsPrerelease;

    /** @var float */
    public $devices;

    /** @var float */
    public $devicesWithNoSession;

    /** @var float */
    public $devicesOnOneUnit;

    /** @var float */
    public $devicesUnderPlaceholderName;

    /** @var float */
    public $cellsOnOneSession;

    /** @var float */
    public $unattributableJobs;

    /** @var float */
    public $unsettledJobs;

    /** @var float */
    public $devicesOnRecentEvidence;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Distinct pools in the held measurement before any view exclusions. (required)
     *
     * @param int $devicesBeforeView
     * @return $this
     */
    public function devicesBeforeView(int $devicesBeforeView)
    {
        $this->devicesBeforeView = $devicesBeforeView;

        return $this;
    }

    /**
     * Pools omitted by the device filter after prerelease exclusions. Each omitted pool is counted once, in prerelease, device-filter, then reported-only order. (required)
     *
     * @param int $devicesExcludedByDeviceFilter
     * @return $this
     */
    public function devicesExcludedByDeviceFilter(int $devicesExcludedByDeviceFilter)
    {
        $this->devicesExcludedByDeviceFilter = $devicesExcludedByDeviceFilter;

        return $this;
    }

    /**
     * Pools omitted by reportedOnly because no selected cell answers about the device, after prerelease and device-filter exclusions. (required)
     *
     * @param int $devicesExcludedAsUnreported
     * @return $this
     */
    public function devicesExcludedAsUnreported(int $devicesExcludedAsUnreported)
    {
        $this->devicesExcludedAsUnreported = $devicesExcludedAsUnreported;

        return $this;
    }

    /**
     * Distinct pools omitted because all recorded browser evidence is pre-release. Zero when includePrerelease is true. Unknown browser identities do not cause prerelease exclusion. Row coverage and summaries describe the retained pools. (required)
     *
     * @param int $devicesExcludedAsPrerelease
     * @return $this
     */
    public function devicesExcludedAsPrerelease(int $devicesExcludedAsPrerelease)
    {
        $this->devicesExcludedAsPrerelease = $devicesExcludedAsPrerelease;

        return $this;
    }

    /**
     * devices
     *
     * @param float $devices
     * @return $this
     */
    public function devices(float $devices)
    {
        $this->devices = $devices;

        return $this;
    }

    /**
     * Pools with no included sessions. Present in the report as unmeasured, including when the start date excluded all evidence. (required)
     *
     * @param float $devicesWithNoSession
     * @return $this
     */
    public function devicesWithNoSession(float $devicesWithNoSession)
    {
        $this->devicesWithNoSession = $devicesWithNoSession;

        return $this;
    }

    /**
     * Pools every one of whose sessions came from one physical machine — a claim about that machine, not the model. (required)
     *
     * @param float $devicesOnOneUnit
     * @return $this
     */
    public function devicesOnOneUnit(float $devicesOnOneUnit)
    {
        $this->devicesOnOneUnit = $devicesOnOneUnit;

        return $this;
    }

    /**
     * Pools no naming rule recognised, published under the stated placeholder. Counted here so a reader can tell how much of the fleet this report cannot name rather than discovering it row by row. (required)
     *
     * @param float $devicesUnderPlaceholderName
     * @return $this
     */
    public function devicesUnderPlaceholderName(float $devicesUnderPlaceholderName)
    {
        $this->devicesUnderPlaceholderName = $devicesUnderPlaceholderName;

        return $this;
    }

    /**
     * Cells whose verdict rests on a single session. (required)
     *
     * @param float $cellsOnOneSession
     * @return $this
     */
    public function cellsOnOneSession(float $cellsOnOneSession)
    {
        $this->cellsOnOneSession = $cellsOnOneSession;

        return $this;
    }

    /**
     * Jobs the fleet could not attribute to any pool, so no row of this report accounts for them. (required)
     *
     * @param float $unattributableJobs
     * @return $this
     */
    public function unattributableJobs(float $unattributableJobs)
    {
        $this->unattributableJobs = $unattributableJobs;

        return $this;
    }

    /**
     * Jobs that had not finished when this was assembled. Their pools carry nothing measured. (required)
     *
     * @param float $unsettledJobs
     * @return $this
     */
    public function unsettledJobs(float $unsettledJobs)
    {
        $this->unsettledJobs = $unsettledJobs;

        return $this;
    }

    /**
     * Pools with sessions excluded by the start date or session limit, including those with no included evidence. (required)
     *
     * @param float $devicesOnRecentEvidence
     * @return $this
     */
    public function devicesOnRecentEvidence(float $devicesOnRecentEvidence)
    {
        $this->devicesOnRecentEvidence = $devicesOnRecentEvidence;

        return $this;
    }
}

