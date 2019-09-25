<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Labels\Daily;

use BitmovinApiSdk\Common\QueryParams;

class DailyStatisticsPerLabelListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $labels;

    /**
     * @return DailyStatisticsPerLabelListQueryParams
     */
    public static function create(): DailyStatisticsPerLabelListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DailyStatisticsPerLabelListQueryParams
     */
    public function offset(int $offset): DailyStatisticsPerLabelListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DailyStatisticsPerLabelListQueryParams
     */
    public function limit(int $limit): DailyStatisticsPerLabelListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $labels
     * @return DailyStatisticsPerLabelListQueryParams
     */
    public function labels(string $labels): DailyStatisticsPerLabelListQueryParams
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
