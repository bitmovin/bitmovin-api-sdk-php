<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp9;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Vp9VideoConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return Vp9VideoConfigurationListQueryParams
     */
    public static function create(): Vp9VideoConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Vp9VideoConfigurationListQueryParams
     */
    public function offset(int $offset): Vp9VideoConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Vp9VideoConfigurationListQueryParams
     */
    public function limit(int $limit): Vp9VideoConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return Vp9VideoConfigurationListQueryParams
     */
    public function name(string $name): Vp9VideoConfigurationListQueryParams
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
