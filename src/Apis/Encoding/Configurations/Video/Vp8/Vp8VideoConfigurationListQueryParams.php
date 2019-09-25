<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp8;

use BitmovinApiSdk\Common\QueryParams;

class Vp8VideoConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return Vp8VideoConfigurationListQueryParams
     */
    public static function create(): Vp8VideoConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Vp8VideoConfigurationListQueryParams
     */
    public function offset(int $offset): Vp8VideoConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Vp8VideoConfigurationListQueryParams
     */
    public function limit(int $limit): Vp8VideoConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return Vp8VideoConfigurationListQueryParams
     */
    public function name(string $name): Vp8VideoConfigurationListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}
