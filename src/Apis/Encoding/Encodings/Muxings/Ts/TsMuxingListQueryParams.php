<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts;

use BitmovinApiSdk\Common\QueryParams;

class TsMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return TsMuxingListQueryParams
     */
    public static function create(): TsMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return TsMuxingListQueryParams
     */
    public function offset(int $offset): TsMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return TsMuxingListQueryParams
     */
    public function limit(int $limit): TsMuxingListQueryParams
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
