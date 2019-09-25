<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Watermark;

use BitmovinApiSdk\Common\QueryParams;

class WatermarkFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return WatermarkFilterListQueryParams
     */
    public static function create(): WatermarkFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return WatermarkFilterListQueryParams
     */
    public function offset(int $offset): WatermarkFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return WatermarkFilterListQueryParams
     */
    public function limit(int $limit): WatermarkFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return WatermarkFilterListQueryParams
     */
    public function name(string $name): WatermarkFilterListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}
