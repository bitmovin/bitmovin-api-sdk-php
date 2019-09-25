<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Unsharp;

use BitmovinApiSdk\Common\QueryParams;

class UnsharpFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return UnsharpFilterListQueryParams
     */
    public static function create(): UnsharpFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return UnsharpFilterListQueryParams
     */
    public function offset(int $offset): UnsharpFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return UnsharpFilterListQueryParams
     */
    public function limit(int $limit): UnsharpFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return UnsharpFilterListQueryParams
     */
    public function name(string $name): UnsharpFilterListQueryParams
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
