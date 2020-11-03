<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Rotate;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class RotateFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return RotateFilterListQueryParams
     */
    public static function create(): RotateFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return RotateFilterListQueryParams
     */
    public function offset(int $offset): RotateFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return RotateFilterListQueryParams
     */
    public function limit(int $limit): RotateFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return RotateFilterListQueryParams
     */
    public function name(string $name): RotateFilterListQueryParams
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
