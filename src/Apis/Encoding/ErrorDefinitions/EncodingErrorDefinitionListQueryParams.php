<?php

namespace BitmovinApiSdk\Apis\Encoding\ErrorDefinitions;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class EncodingErrorDefinitionListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return EncodingErrorDefinitionListQueryParams
     */
    public static function create(): EncodingErrorDefinitionListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EncodingErrorDefinitionListQueryParams
     */
    public function offset(int $offset): EncodingErrorDefinitionListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EncodingErrorDefinitionListQueryParams
     */
    public function limit(int $limit): EncodingErrorDefinitionListQueryParams
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
