<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class FilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /** @var string */
    private $sort;

    /** @var string */
    private $type;

    /**
     * @return FilterListQueryParams
     */
    public static function create(): FilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return FilterListQueryParams
     */
    public function offset(int $offset): FilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return FilterListQueryParams
     */
    public function limit(int $limit): FilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return FilterListQueryParams
     */
    public function name(string $name): FilterListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $sort
     * @return FilterListQueryParams
     */
    public function sort(string $sort): FilterListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $type
     * @return FilterListQueryParams
     */
    public function type(string $type): FilterListQueryParams
    {
        $this->type = $type;

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
