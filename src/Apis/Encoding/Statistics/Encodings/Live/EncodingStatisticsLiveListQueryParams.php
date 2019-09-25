<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live;

use BitmovinApiSdk\Common\QueryParams;

class EncodingStatisticsLiveListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return EncodingStatisticsLiveListQueryParams
     */
    public static function create(): EncodingStatisticsLiveListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EncodingStatisticsLiveListQueryParams
     */
    public function offset(int $offset): EncodingStatisticsLiveListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EncodingStatisticsLiveListQueryParams
     */
    public function limit(int $limit): EncodingStatisticsLiveListQueryParams
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
