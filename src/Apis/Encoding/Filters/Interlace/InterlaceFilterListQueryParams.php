<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Interlace;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class InterlaceFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return InterlaceFilterListQueryParams
     */
    public static function create(): InterlaceFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return InterlaceFilterListQueryParams
     */
    public function offset(int $offset): InterlaceFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return InterlaceFilterListQueryParams
     */
    public function limit(int $limit): InterlaceFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return InterlaceFilterListQueryParams
     */
    public function name(string $name): InterlaceFilterListQueryParams
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
