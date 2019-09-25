<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Deinterlace;

use BitmovinApiSdk\Common\QueryParams;

class DeinterlaceFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DeinterlaceFilterListQueryParams
     */
    public static function create(): DeinterlaceFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DeinterlaceFilterListQueryParams
     */
    public function offset(int $offset): DeinterlaceFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DeinterlaceFilterListQueryParams
     */
    public function limit(int $limit): DeinterlaceFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DeinterlaceFilterListQueryParams
     */
    public function name(string $name): DeinterlaceFilterListQueryParams
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
