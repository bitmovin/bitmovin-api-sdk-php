<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Gcs;

use BitmovinApiSdk\Common\QueryParams;

class GcsInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return GcsInputListQueryParams
     */
    public static function create(): GcsInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GcsInputListQueryParams
     */
    public function offset(int $offset): GcsInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GcsInputListQueryParams
     */
    public function limit(int $limit): GcsInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return GcsInputListQueryParams
     */
    public function name(string $name): GcsInputListQueryParams
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
