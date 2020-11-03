<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H262;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class H262VideoConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return H262VideoConfigurationListQueryParams
     */
    public static function create(): H262VideoConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return H262VideoConfigurationListQueryParams
     */
    public function offset(int $offset): H262VideoConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return H262VideoConfigurationListQueryParams
     */
    public function limit(int $limit): H262VideoConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return H262VideoConfigurationListQueryParams
     */
    public function name(string $name): H262VideoConfigurationListQueryParams
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
