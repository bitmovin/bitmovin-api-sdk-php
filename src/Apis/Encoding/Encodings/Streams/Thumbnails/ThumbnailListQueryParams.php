<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Thumbnails;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class ThumbnailListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ThumbnailListQueryParams
     */
    public static function create(): ThumbnailListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ThumbnailListQueryParams
     */
    public function offset(int $offset): ThumbnailListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ThumbnailListQueryParams
     */
    public function limit(int $limit): ThumbnailListQueryParams
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
