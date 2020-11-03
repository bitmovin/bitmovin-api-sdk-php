<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Azure;

use Carbon\Carbon;
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
        return array_map(function ($value) {
            if($value instanceof Carbon)
            {
                return $value->utc()->toIso8601ZuluString();
            }

            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));
    }
}
