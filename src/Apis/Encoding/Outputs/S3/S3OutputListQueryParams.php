<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\S3;

use BitmovinApiSdk\Common\QueryParams;

class S3OutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return S3OutputListQueryParams
     */
    public static function create(): S3OutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return S3OutputListQueryParams
     */
    public function offset(int $offset): S3OutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return S3OutputListQueryParams
     */
    public function limit(int $limit): S3OutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return S3OutputListQueryParams
     */
    public function name(string $name): S3OutputListQueryParams
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
