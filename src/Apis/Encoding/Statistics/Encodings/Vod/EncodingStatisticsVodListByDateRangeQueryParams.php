<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Vod;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class EncodingStatisticsVodListByDateRangeQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return EncodingStatisticsVodListByDateRangeQueryParams
     */
    public static function create(): EncodingStatisticsVodListByDateRangeQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EncodingStatisticsVodListByDateRangeQueryParams
     */
    public function offset(int $offset): EncodingStatisticsVodListByDateRangeQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EncodingStatisticsVodListByDateRangeQueryParams
     */
    public function limit(int $limit): EncodingStatisticsVodListByDateRangeQueryParams
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
