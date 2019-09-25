<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs;

use BitmovinApiSdk\Common\QueryParams;

class ProgressiveTsMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ProgressiveTsMuxingListQueryParams
     */
    public static function create(): ProgressiveTsMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ProgressiveTsMuxingListQueryParams
     */
    public function offset(int $offset): ProgressiveTsMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ProgressiveTsMuxingListQueryParams
     */
    public function limit(int $limit): ProgressiveTsMuxingListQueryParams
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
