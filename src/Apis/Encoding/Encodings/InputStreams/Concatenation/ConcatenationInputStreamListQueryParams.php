<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Concatenation;

use BitmovinApiSdk\Common\QueryParams;

class ConcatenationInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ConcatenationInputStreamListQueryParams
     */
    public static function create(): ConcatenationInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ConcatenationInputStreamListQueryParams
     */
    public function offset(int $offset): ConcatenationInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ConcatenationInputStreamListQueryParams
     */
    public function limit(int $limit): ConcatenationInputStreamListQueryParams
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
