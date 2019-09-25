<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ChunkedText;

use BitmovinApiSdk\Common\QueryParams;

class ChunkedTextMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ChunkedTextMuxingListQueryParams
     */
    public static function create(): ChunkedTextMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ChunkedTextMuxingListQueryParams
     */
    public function offset(int $offset): ChunkedTextMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ChunkedTextMuxingListQueryParams
     */
    public function limit(int $limit): ChunkedTextMuxingListQueryParams
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
