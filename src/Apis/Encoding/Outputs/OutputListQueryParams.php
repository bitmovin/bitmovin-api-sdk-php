<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs;

use BitmovinApiSdk\Common\QueryParams;

class OutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return OutputListQueryParams
     */
    public static function create(): OutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return OutputListQueryParams
     */
    public function offset(int $offset): OutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return OutputListQueryParams
     */
    public function limit(int $limit): OutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return OutputListQueryParams
     */
    public function name(string $name): OutputListQueryParams
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
