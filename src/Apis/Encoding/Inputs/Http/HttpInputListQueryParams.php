<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Http;

use BitmovinApiSdk\Common\QueryParams;

class HttpInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return HttpInputListQueryParams
     */
    public static function create(): HttpInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return HttpInputListQueryParams
     */
    public function offset(int $offset): HttpInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return HttpInputListQueryParams
     */
    public function limit(int $limit): HttpInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return HttpInputListQueryParams
     */
    public function name(string $name): HttpInputListQueryParams
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
