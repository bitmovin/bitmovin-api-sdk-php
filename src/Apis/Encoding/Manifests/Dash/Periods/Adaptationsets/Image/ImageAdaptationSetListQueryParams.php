<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Image;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class ImageAdaptationSetListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ImageAdaptationSetListQueryParams
     */
    public static function create(): ImageAdaptationSetListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ImageAdaptationSetListQueryParams
     */
    public function offset(int $offset): ImageAdaptationSetListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ImageAdaptationSetListQueryParams
     */
    public function limit(int $limit): ImageAdaptationSetListQueryParams
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
