<?php

namespace BitmovinApiSdk\Apis\Streams\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StreamsLiveResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

    /**
     * @return StreamsLiveResponseListQueryParams
     */
    public static function create(): StreamsLiveResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamsLiveResponseListQueryParams
     */
    public function offset(int $offset): StreamsLiveResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamsLiveResponseListQueryParams
     */
    public function limit(int $limit): StreamsLiveResponseListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return StreamsLiveResponseListQueryParams
     */
    public function sort(string $sort): StreamsLiveResponseListQueryParams
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
