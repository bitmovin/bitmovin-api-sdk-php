<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Local;

use BitmovinApiSdk\Common\QueryParams;

class LocalOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return LocalOutputListQueryParams
     */
    public static function create(): LocalOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LocalOutputListQueryParams
     */
    public function offset(int $offset): LocalOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LocalOutputListQueryParams
     */
    public function limit(int $limit): LocalOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return LocalOutputListQueryParams
     */
    public function name(string $name): LocalOutputListQueryParams
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
