<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Azure;

use BitmovinApiSdk\Common\QueryParams;

class AzureOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AzureOutputListQueryParams
     */
    public static function create(): AzureOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AzureOutputListQueryParams
     */
    public function offset(int $offset): AzureOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AzureOutputListQueryParams
     */
    public function limit(int $limit): AzureOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AzureOutputListQueryParams
     */
    public function name(string $name): AzureOutputListQueryParams
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
