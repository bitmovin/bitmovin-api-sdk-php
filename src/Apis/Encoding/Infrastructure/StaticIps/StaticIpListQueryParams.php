<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\StaticIps;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StaticIpListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return StaticIpListQueryParams
     */
    public static function create(): StaticIpListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StaticIpListQueryParams
     */
    public function offset(int $offset): StaticIpListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StaticIpListQueryParams
     */
    public function limit(int $limit): StaticIpListQueryParams
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
