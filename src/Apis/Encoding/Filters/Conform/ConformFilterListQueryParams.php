<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Conform;

use BitmovinApiSdk\Common\QueryParams;

class ConformFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return ConformFilterListQueryParams
     */
    public static function create(): ConformFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ConformFilterListQueryParams
     */
    public function offset(int $offset): ConformFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ConformFilterListQueryParams
     */
    public function limit(int $limit): ConformFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return ConformFilterListQueryParams
     */
    public function name(string $name): ConformFilterListQueryParams
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
