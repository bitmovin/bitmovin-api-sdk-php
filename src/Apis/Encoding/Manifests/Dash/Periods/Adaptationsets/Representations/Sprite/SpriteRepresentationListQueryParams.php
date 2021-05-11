<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Sprite;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SpriteRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SpriteRepresentationListQueryParams
     */
    public static function create(): SpriteRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SpriteRepresentationListQueryParams
     */
    public function offset(int $offset): SpriteRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SpriteRepresentationListQueryParams
     */
    public function limit(int $limit): SpriteRepresentationListQueryParams
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
