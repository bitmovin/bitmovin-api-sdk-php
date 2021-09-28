<?php

namespace BitmovinApiSdk\Apis\Analytics\Licenses;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AnalyticsLicenseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AnalyticsLicenseListQueryParams
     */
    public static function create(): AnalyticsLicenseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsLicenseListQueryParams
     */
    public function offset(int $offset): AnalyticsLicenseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsLicenseListQueryParams
     */
    public function limit(int $limit): AnalyticsLicenseListQueryParams
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
