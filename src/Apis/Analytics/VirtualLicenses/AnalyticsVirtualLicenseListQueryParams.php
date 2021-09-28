<?php

namespace BitmovinApiSdk\Apis\Analytics\VirtualLicenses;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AnalyticsVirtualLicenseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AnalyticsVirtualLicenseListQueryParams
     */
    public static function create(): AnalyticsVirtualLicenseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsVirtualLicenseListQueryParams
     */
    public function offset(int $offset): AnalyticsVirtualLicenseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsVirtualLicenseListQueryParams
     */
    public function limit(int $limit): AnalyticsVirtualLicenseListQueryParams
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
