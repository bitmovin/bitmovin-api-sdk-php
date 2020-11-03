<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H264;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class H264VideoConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return H264VideoConfigurationListQueryParams
     */
    public static function create(): H264VideoConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return H264VideoConfigurationListQueryParams
     */
    public function offset(int $offset): H264VideoConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return H264VideoConfigurationListQueryParams
     */
    public function limit(int $limit): H264VideoConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return H264VideoConfigurationListQueryParams
     */
    public function name(string $name): H264VideoConfigurationListQueryParams
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
