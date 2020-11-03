<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting\Incidents;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AnalyticsIncidentListByLicenseKeyQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AnalyticsIncidentListByLicenseKeyQueryParams
     */
    public static function create(): AnalyticsIncidentListByLicenseKeyQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsIncidentListByLicenseKeyQueryParams
     */
    public function offset(int $offset): AnalyticsIncidentListByLicenseKeyQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsIncidentListByLicenseKeyQueryParams
     */
    public function limit(int $limit): AnalyticsIncidentListByLicenseKeyQueryParams
    {
        $this->limit = $limit;

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
