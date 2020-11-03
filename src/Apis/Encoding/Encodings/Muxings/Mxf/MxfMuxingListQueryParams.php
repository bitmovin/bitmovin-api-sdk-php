<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mxf;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class MxfMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return MxfMuxingListQueryParams
     */
    public static function create(): MxfMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return MxfMuxingListQueryParams
     */
    public function offset(int $offset): MxfMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return MxfMuxingListQueryParams
     */
    public function limit(int $limit): MxfMuxingListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    public function toArray(): array
    {
        return array_map(function ($value) {
            if($value instanceof Carbon)
            {
                return $value->utc()->toIso8601ZuluString();
            }

            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));
    }
}
