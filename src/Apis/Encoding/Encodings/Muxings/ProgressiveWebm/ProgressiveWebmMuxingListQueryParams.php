<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm;

use BitmovinApiSdk\Common\QueryParams;

class ProgressiveWebmMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ProgressiveWebmMuxingListQueryParams
     */
    public static function create(): ProgressiveWebmMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ProgressiveWebmMuxingListQueryParams
     */
    public function offset(int $offset): ProgressiveWebmMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ProgressiveWebmMuxingListQueryParams
     */
    public function limit(int $limit): ProgressiveWebmMuxingListQueryParams
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
