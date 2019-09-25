<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Azure;

use BitmovinApiSdk\Common\QueryParams;

class AzureInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AzureInputListQueryParams
     */
    public static function create(): AzureInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AzureInputListQueryParams
     */
    public function offset(int $offset): AzureInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AzureInputListQueryParams
     */
    public function limit(int $limit): AzureInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AzureInputListQueryParams
     */
    public function name(string $name): AzureInputListQueryParams
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
