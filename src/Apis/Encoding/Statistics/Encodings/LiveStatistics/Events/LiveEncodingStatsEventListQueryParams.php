<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Events;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class LiveEncodingStatsEventListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var bool */
    private $sortByTime;

    /**
     * @return LiveEncodingStatsEventListQueryParams
     */
    public static function create(): LiveEncodingStatsEventListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LiveEncodingStatsEventListQueryParams
     */
    public function offset(int $offset): LiveEncodingStatsEventListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LiveEncodingStatsEventListQueryParams
     */
    public function limit(int $limit): LiveEncodingStatsEventListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param bool $sortByTime
     * @return LiveEncodingStatsEventListQueryParams
     */
    public function sortByTime(bool $sortByTime): LiveEncodingStatsEventListQueryParams
    {
        $this->sortByTime = $sortByTime;

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
