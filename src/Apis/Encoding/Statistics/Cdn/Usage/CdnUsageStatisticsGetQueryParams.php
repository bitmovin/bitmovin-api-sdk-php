<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Cdn\Usage;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class CdnUsageStatisticsGetQueryParams implements QueryParams
{
    /** @var Carbon */
    private $from;

    /** @var Carbon */
    private $to;

    /**
     * @return CdnUsageStatisticsGetQueryParams
     */
    public static function create(): CdnUsageStatisticsGetQueryParams
    {
        return new static();
    }

    /**
     * @param Carbon $from
     * @return CdnUsageStatisticsGetQueryParams
     */
    public function from(Carbon $from): CdnUsageStatisticsGetQueryParams
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @param Carbon $to
     * @return CdnUsageStatisticsGetQueryParams
     */
    public function to(Carbon $to): CdnUsageStatisticsGetQueryParams
    {
        $this->to = $to;

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
