<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Streams;

use BitmovinApiSdk\Common\QueryParams;

class StreamInfosListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return StreamInfosListQueryParams
     */
    public static function create(): StreamInfosListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamInfosListQueryParams
     */
    public function offset(int $offset): StreamInfosListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamInfosListQueryParams
     */
    public function limit(int $limit): StreamInfosListQueryParams
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
