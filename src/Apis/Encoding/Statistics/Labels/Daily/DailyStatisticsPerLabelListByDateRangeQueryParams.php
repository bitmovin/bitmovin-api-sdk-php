<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Labels\Daily;

use BitmovinApiSdk\Common\QueryParams;

class DailyStatisticsPerLabelListByDateRangeQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $labels;

    /**
     * @return DailyStatisticsPerLabelListByDateRangeQueryParams
     */
    public static function create(): DailyStatisticsPerLabelListByDateRangeQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DailyStatisticsPerLabelListByDateRangeQueryParams
     */
    public function offset(int $offset): DailyStatisticsPerLabelListByDateRangeQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DailyStatisticsPerLabelListByDateRangeQueryParams
     */
    public function limit(int $limit): DailyStatisticsPerLabelListByDateRangeQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $labels
     * @return DailyStatisticsPerLabelListByDateRangeQueryParams
     */
    public function labels(string $labels): DailyStatisticsPerLabelListByDateRangeQueryParams
    {
        $this->labels = $labels;

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
