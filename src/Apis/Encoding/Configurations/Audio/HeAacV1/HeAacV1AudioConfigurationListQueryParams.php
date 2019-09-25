<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV1;

use BitmovinApiSdk\Common\QueryParams;

class HeAacV1AudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return HeAacV1AudioConfigurationListQueryParams
     */
    public static function create(): HeAacV1AudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return HeAacV1AudioConfigurationListQueryParams
     */
    public function offset(int $offset): HeAacV1AudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return HeAacV1AudioConfigurationListQueryParams
     */
    public function limit(int $limit): HeAacV1AudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return HeAacV1AudioConfigurationListQueryParams
     */
    public function name(string $name): HeAacV1AudioConfigurationListQueryParams
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
