<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class CodecConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return CodecConfigurationListQueryParams
     */
    public static function create(): CodecConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return CodecConfigurationListQueryParams
     */
    public function offset(int $offset): CodecConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return CodecConfigurationListQueryParams
     */
    public function limit(int $limit): CodecConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return CodecConfigurationListQueryParams
     */
    public function name(string $name): CodecConfigurationListQueryParams
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
