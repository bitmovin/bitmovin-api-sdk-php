<?php

namespace BitmovinApiSdk\Apis\General\ErrorDefinitions;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class ApiErrorDefinitionListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ApiErrorDefinitionListQueryParams
     */
    public static function create(): ApiErrorDefinitionListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ApiErrorDefinitionListQueryParams
     */
    public function offset(int $offset): ApiErrorDefinitionListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ApiErrorDefinitionListQueryParams
     */
    public function limit(int $limit): ApiErrorDefinitionListQueryParams
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
