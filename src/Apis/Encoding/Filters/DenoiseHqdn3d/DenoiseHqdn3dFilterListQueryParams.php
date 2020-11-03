<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\DenoiseHqdn3d;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DenoiseHqdn3dFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DenoiseHqdn3dFilterListQueryParams
     */
    public static function create(): DenoiseHqdn3dFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DenoiseHqdn3dFilterListQueryParams
     */
    public function offset(int $offset): DenoiseHqdn3dFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DenoiseHqdn3dFilterListQueryParams
     */
    public function limit(int $limit): DenoiseHqdn3dFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DenoiseHqdn3dFilterListQueryParams
     */
    public function name(string $name): DenoiseHqdn3dFilterListQueryParams
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
