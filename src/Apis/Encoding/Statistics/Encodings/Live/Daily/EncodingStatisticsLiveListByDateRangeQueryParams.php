<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live\Daily;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class EncodingStatisticsLiveListByDateRangeQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return EncodingStatisticsLiveListByDateRangeQueryParams
     */
    public static function create(): EncodingStatisticsLiveListByDateRangeQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EncodingStatisticsLiveListByDateRangeQueryParams
     */
    public function offset(int $offset): EncodingStatisticsLiveListByDateRangeQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EncodingStatisticsLiveListByDateRangeQueryParams
     */
    public function limit(int $limit): EncodingStatisticsLiveListByDateRangeQueryParams
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
