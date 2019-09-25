<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Daily;

use BitmovinApiSdk\Common\QueryParams;

class DailyStatisticsListByDateRangeQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DailyStatisticsListByDateRangeQueryParams
     */
    public static function create(): DailyStatisticsListByDateRangeQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DailyStatisticsListByDateRangeQueryParams
     */
    public function offset(int $offset): DailyStatisticsListByDateRangeQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DailyStatisticsListByDateRangeQueryParams
     */
    public function limit(int $limit): DailyStatisticsListByDateRangeQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}
