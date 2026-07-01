<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H265v2;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class H265V2VideoConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return H265V2VideoConfigurationListQueryParams
     */
    public static function create(): H265V2VideoConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return H265V2VideoConfigurationListQueryParams
     */
    public function offset(int $offset): H265V2VideoConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return H265V2VideoConfigurationListQueryParams
     */
    public function limit(int $limit): H265V2VideoConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return H265V2VideoConfigurationListQueryParams
     */
    public function name(string $name): H265V2VideoConfigurationListQueryParams
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
