<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV2;

use BitmovinApiSdk\Common\QueryParams;

class HeAacV2AudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return HeAacV2AudioConfigurationListQueryParams
     */
    public static function create(): HeAacV2AudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return HeAacV2AudioConfigurationListQueryParams
     */
    public function offset(int $offset): HeAacV2AudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return HeAacV2AudioConfigurationListQueryParams
     */
    public function limit(int $limit): HeAacV2AudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return HeAacV2AudioConfigurationListQueryParams
     */
    public function name(string $name): HeAacV2AudioConfigurationListQueryParams
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
