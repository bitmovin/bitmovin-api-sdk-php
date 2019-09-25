<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Eac3;

use BitmovinApiSdk\Common\QueryParams;

class Eac3AudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return Eac3AudioConfigurationListQueryParams
     */
    public static function create(): Eac3AudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Eac3AudioConfigurationListQueryParams
     */
    public function offset(int $offset): Eac3AudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Eac3AudioConfigurationListQueryParams
     */
    public function limit(int $limit): Eac3AudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return Eac3AudioConfigurationListQueryParams
     */
    public function name(string $name): Eac3AudioConfigurationListQueryParams
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
