<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\Encodings\DnsMappings;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DnsMappingResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DnsMappingResponseListQueryParams
     */
    public static function create(): DnsMappingResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DnsMappingResponseListQueryParams
     */
    public function offset(int $offset): DnsMappingResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DnsMappingResponseListQueryParams
     */
    public function limit(int $limit): DnsMappingResponseListQueryParams
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
