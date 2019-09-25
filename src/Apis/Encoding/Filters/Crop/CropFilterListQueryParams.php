<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Crop;

use BitmovinApiSdk\Common\QueryParams;

class CropFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return CropFilterListQueryParams
     */
    public static function create(): CropFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return CropFilterListQueryParams
     */
    public function offset(int $offset): CropFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return CropFilterListQueryParams
     */
    public function limit(int $limit): CropFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return CropFilterListQueryParams
     */
    public function name(string $name): CropFilterListQueryParams
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
