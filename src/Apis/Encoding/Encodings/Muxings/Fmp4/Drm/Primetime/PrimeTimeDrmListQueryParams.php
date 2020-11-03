<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Primetime;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PrimeTimeDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PrimeTimeDrmListQueryParams
     */
    public static function create(): PrimeTimeDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PrimeTimeDrmListQueryParams
     */
    public function offset(int $offset): PrimeTimeDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PrimeTimeDrmListQueryParams
     */
    public function limit(int $limit): PrimeTimeDrmListQueryParams
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
