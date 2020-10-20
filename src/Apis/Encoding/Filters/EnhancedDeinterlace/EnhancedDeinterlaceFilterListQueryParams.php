<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EnhancedDeinterlace;

use BitmovinApiSdk\Common\QueryParams;

class EnhancedDeinterlaceFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return EnhancedDeinterlaceFilterListQueryParams
     */
    public static function create(): EnhancedDeinterlaceFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EnhancedDeinterlaceFilterListQueryParams
     */
    public function offset(int $offset): EnhancedDeinterlaceFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EnhancedDeinterlaceFilterListQueryParams
     */
    public function limit(int $limit): EnhancedDeinterlaceFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return EnhancedDeinterlaceFilterListQueryParams
     */
    public function name(string $name): EnhancedDeinterlaceFilterListQueryParams
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
