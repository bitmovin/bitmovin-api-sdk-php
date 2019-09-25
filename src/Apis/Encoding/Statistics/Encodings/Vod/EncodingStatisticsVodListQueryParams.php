<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Vod;

use BitmovinApiSdk\Common\QueryParams;

class EncodingStatisticsVodListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return EncodingStatisticsVodListQueryParams
     */
    public static function create(): EncodingStatisticsVodListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EncodingStatisticsVodListQueryParams
     */
    public function offset(int $offset): EncodingStatisticsVodListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EncodingStatisticsVodListQueryParams
     */
    public function limit(int $limit): EncodingStatisticsVodListQueryParams
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
