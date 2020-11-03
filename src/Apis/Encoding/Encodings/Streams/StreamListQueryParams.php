<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return StreamListQueryParams
     */
    public static function create(): StreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamListQueryParams
     */
    public function offset(int $offset): StreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamListQueryParams
     */
    public function limit(int $limit): StreamListQueryParams
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
