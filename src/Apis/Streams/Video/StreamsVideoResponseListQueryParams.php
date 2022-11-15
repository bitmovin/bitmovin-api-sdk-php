<?php

namespace BitmovinApiSdk\Apis\Streams\Video;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StreamsVideoResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

    /**
     * @return StreamsVideoResponseListQueryParams
     */
    public static function create(): StreamsVideoResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamsVideoResponseListQueryParams
     */
    public function offset(int $offset): StreamsVideoResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamsVideoResponseListQueryParams
     */
    public function limit(int $limit): StreamsVideoResponseListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return StreamsVideoResponseListQueryParams
     */
    public function sort(string $sort): StreamsVideoResponseListQueryParams
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
