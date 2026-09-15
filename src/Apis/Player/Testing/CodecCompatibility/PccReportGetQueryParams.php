<?php

namespace BitmovinApiSdk\Apis\Player\Testing\CodecCompatibility;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PccReportGetQueryParams implements QueryParams
{
    /** @var bool */
    private $includePrerelease;

    /** @var bool */
    private $reportedOnly;

    /** @var bool */
    private $hdrOnly;

    /** @var string */
    private $codec;

    /** @var string */
    private $device;

    /**
     * @return PccReportGetQueryParams
     */
    public static function create(): PccReportGetQueryParams
    {
        return new static();
    }

    /**
     * @param bool $includePrerelease
     * @return PccReportGetQueryParams
     */
    public function includePrerelease(bool $includePrerelease): PccReportGetQueryParams
    {
        $this->includePrerelease = $includePrerelease;

        return $this;
    }

    /**
     * @param bool $reportedOnly
     * @return PccReportGetQueryParams
     */
    public function reportedOnly(bool $reportedOnly): PccReportGetQueryParams
    {
        $this->reportedOnly = $reportedOnly;

        return $this;
    }

    /**
     * @param bool $hdrOnly
     * @return PccReportGetQueryParams
     */
    public function hdrOnly(bool $hdrOnly): PccReportGetQueryParams
    {
        $this->hdrOnly = $hdrOnly;

        return $this;
    }

    /**
     * @param string $codec
     * @return PccReportGetQueryParams
     */
    public function codec(string $codec): PccReportGetQueryParams
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * @param string $device
     * @return PccReportGetQueryParams
     */
    public function device(string $device): PccReportGetQueryParams
    {
        $this->device = $device;

        return $this;
    }

    public function toArray(): array
    {
        return array_map(function ($value) {
            if($value instanceof Carbon)
            {
                return $value->utc()->toIso8601ZuluString();
            }

            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));
    }
}
