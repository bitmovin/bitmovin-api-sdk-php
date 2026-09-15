<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccReportView extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $device;

    /** @var string */
    public $codec;

    /** @var bool */
    public $hdrOnly;

    /** @var bool */
    public $reportedOnly;

    /** @var bool */
    public $includePrerelease;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Effective trimmed lowercase substring matched against the published device name and qualifier. Empty means all devices. (required)
     *
     * @param string $device
     * @return $this
     */
    public function device(string $device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Effective trimmed lowercase substring matched against codec identifiers. Empty means all codecs. (required)
     *
     * @param string $codec
     * @return $this
     */
    public function codec(string $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * Whether only HDR columns are selected. (required)
     *
     * @param bool $hdrOnly
     * @return $this
     */
    public function hdrOnly(bool $hdrOnly)
    {
        $this->hdrOnly = $hdrOnly;

        return $this;
    }

    /**
     * Whether pools need at least one selected cell answering about the device. (required)
     *
     * @param bool $reportedOnly
     * @return $this
     */
    public function reportedOnly(bool $reportedOnly)
    {
        $this->reportedOnly = $reportedOnly;

        return $this;
    }

    /**
     * Whether pools with only prerelease browser evidence are included. (required)
     *
     * @param bool $includePrerelease
     * @return $this
     */
    public function includePrerelease(bool $includePrerelease)
    {
        $this->includePrerelease = $includePrerelease;

        return $this;
    }
}

