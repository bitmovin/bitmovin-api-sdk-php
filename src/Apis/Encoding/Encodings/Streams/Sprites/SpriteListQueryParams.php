<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Sprites;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SpriteListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SpriteListQueryParams
     */
    public static function create(): SpriteListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SpriteListQueryParams
     */
    public function offset(int $offset): SpriteListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SpriteListQueryParams
     */
    public function limit(int $limit): SpriteListQueryParams
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
