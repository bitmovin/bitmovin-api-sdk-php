<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EbuR128SinglePass;

use BitmovinApiSdk\Common\QueryParams;

class EbuR128SinglePassFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return EbuR128SinglePassFilterListQueryParams
     */
    public static function create(): EbuR128SinglePassFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EbuR128SinglePassFilterListQueryParams
     */
    public function offset(int $offset): EbuR128SinglePassFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EbuR128SinglePassFilterListQueryParams
     */
    public function limit(int $limit): EbuR128SinglePassFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return EbuR128SinglePassFilterListQueryParams
     */
    public function name(string $name): EbuR128SinglePassFilterListQueryParams
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
