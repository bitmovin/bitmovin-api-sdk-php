<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Text;

use BitmovinApiSdk\Common\QueryParams;

class TextFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return TextFilterListQueryParams
     */
    public static function create(): TextFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return TextFilterListQueryParams
     */
    public function offset(int $offset): TextFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return TextFilterListQueryParams
     */
    public function limit(int $limit): TextFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return TextFilterListQueryParams
     */
    public function name(string $name): TextFilterListQueryParams
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
