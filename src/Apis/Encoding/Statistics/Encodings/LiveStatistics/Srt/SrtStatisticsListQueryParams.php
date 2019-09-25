<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Srt;

use BitmovinApiSdk\Common\QueryParams;

class SrtStatisticsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SrtStatisticsListQueryParams
     */
    public static function create(): SrtStatisticsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SrtStatisticsListQueryParams
     */
    public function offset(int $offset): SrtStatisticsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SrtStatisticsListQueryParams
     */
    public function limit(int $limit): SrtStatisticsListQueryParams
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
