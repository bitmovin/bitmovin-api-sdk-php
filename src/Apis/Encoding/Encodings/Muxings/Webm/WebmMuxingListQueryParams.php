<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm;

use BitmovinApiSdk\Common\QueryParams;

class WebmMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return WebmMuxingListQueryParams
     */
    public static function create(): WebmMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return WebmMuxingListQueryParams
     */
    public function offset(int $offset): WebmMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return WebmMuxingListQueryParams
     */
    public function limit(int $limit): WebmMuxingListQueryParams
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
