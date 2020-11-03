<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Labels;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StatisticsPerLabelListByDateRangeQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $labels;

    /**
     * @return StatisticsPerLabelListByDateRangeQueryParams
     */
    public static function create(): StatisticsPerLabelListByDateRangeQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StatisticsPerLabelListByDateRangeQueryParams
     */
    public function offset(int $offset): StatisticsPerLabelListByDateRangeQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StatisticsPerLabelListByDateRangeQueryParams
     */
    public function limit(int $limit): StatisticsPerLabelListByDateRangeQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $labels
     * @return StatisticsPerLabelListByDateRangeQueryParams
     */
    public function labels(string $labels): StatisticsPerLabelListByDateRangeQueryParams
    {
        $this->labels = $labels;

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
