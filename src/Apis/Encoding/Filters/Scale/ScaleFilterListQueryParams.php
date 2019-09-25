<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Scale;

use BitmovinApiSdk\Common\QueryParams;

class ScaleFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return ScaleFilterListQueryParams
     */
    public static function create(): ScaleFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ScaleFilterListQueryParams
     */
    public function offset(int $offset): ScaleFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ScaleFilterListQueryParams
     */
    public function limit(int $limit): ScaleFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return ScaleFilterListQueryParams
     */
    public function name(string $name): ScaleFilterListQueryParams
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
