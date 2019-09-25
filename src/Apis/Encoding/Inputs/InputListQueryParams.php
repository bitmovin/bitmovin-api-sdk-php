<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs;

use BitmovinApiSdk\Common\QueryParams;

class InputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return InputListQueryParams
     */
    public static function create(): InputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return InputListQueryParams
     */
    public function offset(int $offset): InputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return InputListQueryParams
     */
    public function limit(int $limit): InputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return InputListQueryParams
     */
    public function name(string $name): InputListQueryParams
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
