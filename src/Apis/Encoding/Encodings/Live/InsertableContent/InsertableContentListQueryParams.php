<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent;

use BitmovinApiSdk\Common\QueryParams;

class InsertableContentListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return InsertableContentListQueryParams
     */
    public static function create(): InsertableContentListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return InsertableContentListQueryParams
     */
    public function offset(int $offset): InsertableContentListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return InsertableContentListQueryParams
     */
    public function limit(int $limit): InsertableContentListQueryParams
    {
        $this->limit = $limit;

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
