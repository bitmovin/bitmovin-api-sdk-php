<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Azure;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AzureAccountListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AzureAccountListQueryParams
     */
    public static function create(): AzureAccountListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AzureAccountListQueryParams
     */
    public function offset(int $offset): AzureAccountListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AzureAccountListQueryParams
     */
    public function limit(int $limit): AzureAccountListQueryParams
    {
        $this->limit = $limit;

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
