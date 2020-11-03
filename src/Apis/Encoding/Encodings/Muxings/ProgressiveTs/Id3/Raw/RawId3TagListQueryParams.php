<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\Raw;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class RawId3TagListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return RawId3TagListQueryParams
     */
    public static function create(): RawId3TagListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return RawId3TagListQueryParams
     */
    public function offset(int $offset): RawId3TagListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return RawId3TagListQueryParams
     */
    public function limit(int $limit): RawId3TagListQueryParams
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
