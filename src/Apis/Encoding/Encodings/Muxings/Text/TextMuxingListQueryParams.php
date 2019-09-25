<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Text;

use BitmovinApiSdk\Common\QueryParams;

class TextMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return TextMuxingListQueryParams
     */
    public static function create(): TextMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return TextMuxingListQueryParams
     */
    public function offset(int $offset): TextMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return TextMuxingListQueryParams
     */
    public function limit(int $limit): TextMuxingListQueryParams
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
