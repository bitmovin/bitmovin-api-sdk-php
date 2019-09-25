<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics;

use BitmovinApiSdk\Common\QueryParams;

class StatisticsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return StatisticsListQueryParams
     */
    public static function create(): StatisticsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StatisticsListQueryParams
     */
    public function offset(int $offset): StatisticsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StatisticsListQueryParams
     */
    public function limit(int $limit): StatisticsListQueryParams
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
