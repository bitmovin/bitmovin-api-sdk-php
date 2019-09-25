<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Zixi;

use BitmovinApiSdk\Common\QueryParams;

class ZixiInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return ZixiInputListQueryParams
     */
    public static function create(): ZixiInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ZixiInputListQueryParams
     */
    public function offset(int $offset): ZixiInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ZixiInputListQueryParams
     */
    public function limit(int $limit): ZixiInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return ZixiInputListQueryParams
     */
    public function name(string $name): ZixiInputListQueryParams
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
