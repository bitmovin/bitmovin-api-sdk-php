<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live\Options;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class LiveOptionsStatisticsListByDateRangeQueryParams implements QueryParams
{
    /** @var Carbon */
    private $from;

    /** @var Carbon */
    private $to;

    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return LiveOptionsStatisticsListByDateRangeQueryParams
     */
    public static function create(): LiveOptionsStatisticsListByDateRangeQueryParams
    {
        return new static();
    }

    /**
     * @param Carbon $from
     * @return LiveOptionsStatisticsListByDateRangeQueryParams
     */
    public function from(Carbon $from): LiveOptionsStatisticsListByDateRangeQueryParams
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @param Carbon $to
     * @return LiveOptionsStatisticsListByDateRangeQueryParams
     */
    public function to(Carbon $to): LiveOptionsStatisticsListByDateRangeQueryParams
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @param int $offset
     * @return LiveOptionsStatisticsListByDateRangeQueryParams
     */
    public function offset(int $offset): LiveOptionsStatisticsListByDateRangeQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LiveOptionsStatisticsListByDateRangeQueryParams
     */
    public function limit(int $limit): LiveOptionsStatisticsListByDateRangeQueryParams
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
