<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Bifs;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class BifListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return BifListQueryParams
     */
    public static function create(): BifListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return BifListQueryParams
     */
    public function offset(int $offset): BifListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return BifListQueryParams
     */
    public function limit(int $limit): BifListQueryParams
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
