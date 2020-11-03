<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting\Incidents;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AnalyticsIncidentListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AnalyticsIncidentListQueryParams
     */
    public static function create(): AnalyticsIncidentListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsIncidentListQueryParams
     */
    public function offset(int $offset): AnalyticsIncidentListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsIncidentListQueryParams
     */
    public function limit(int $limit): AnalyticsIncidentListQueryParams
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
