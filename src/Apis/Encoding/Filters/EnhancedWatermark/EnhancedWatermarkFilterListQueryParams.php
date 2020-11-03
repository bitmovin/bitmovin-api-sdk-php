<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EnhancedWatermark;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class EnhancedWatermarkFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return EnhancedWatermarkFilterListQueryParams
     */
    public static function create(): EnhancedWatermarkFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EnhancedWatermarkFilterListQueryParams
     */
    public function offset(int $offset): EnhancedWatermarkFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EnhancedWatermarkFilterListQueryParams
     */
    public function limit(int $limit): EnhancedWatermarkFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return EnhancedWatermarkFilterListQueryParams
     */
    public function name(string $name): EnhancedWatermarkFilterListQueryParams
    {
        $this->name = $name;

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
