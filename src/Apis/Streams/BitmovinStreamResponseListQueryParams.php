<?php

namespace BitmovinApiSdk\Apis\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class BitmovinStreamResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

    /**
     * @return BitmovinStreamResponseListQueryParams
     */
    public static function create(): BitmovinStreamResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return BitmovinStreamResponseListQueryParams
     */
    public function offset(int $offset): BitmovinStreamResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return BitmovinStreamResponseListQueryParams
     */
    public function limit(int $limit): BitmovinStreamResponseListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return BitmovinStreamResponseListQueryParams
     */
    public function sort(string $sort): BitmovinStreamResponseListQueryParams
    {
        $this->sort = $sort;

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
