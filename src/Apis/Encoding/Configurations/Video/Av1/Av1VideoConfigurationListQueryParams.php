<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Av1;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Av1VideoConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return Av1VideoConfigurationListQueryParams
     */
    public static function create(): Av1VideoConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Av1VideoConfigurationListQueryParams
     */
    public function offset(int $offset): Av1VideoConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Av1VideoConfigurationListQueryParams
     */
    public function limit(int $limit): Av1VideoConfigurationListQueryParams
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
