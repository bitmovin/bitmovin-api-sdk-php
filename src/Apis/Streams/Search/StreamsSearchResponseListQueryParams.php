<?php

namespace BitmovinApiSdk\Apis\Streams\Search;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StreamsSearchResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $query;

    /**
     * @return StreamsSearchResponseListQueryParams
     */
    public static function create(): StreamsSearchResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamsSearchResponseListQueryParams
     */
    public function offset(int $offset): StreamsSearchResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamsSearchResponseListQueryParams
     */
    public function limit(int $limit): StreamsSearchResponseListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $query
     * @return StreamsSearchResponseListQueryParams
     */
    public function query(string $query): StreamsSearchResponseListQueryParams
    {
        $this->query = $query;

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
