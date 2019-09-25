<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Daily;

use BitmovinApiSdk\Common\QueryParams;

class DailyStatisticsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DailyStatisticsListQueryParams
     */
    public static function create(): DailyStatisticsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DailyStatisticsListQueryParams
     */
    public function offset(int $offset): DailyStatisticsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DailyStatisticsListQueryParams
     */
    public function limit(int $limit): DailyStatisticsListQueryParams
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
