<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Mp4MuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return Mp4MuxingListQueryParams
     */
    public static function create(): Mp4MuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Mp4MuxingListQueryParams
     */
    public function offset(int $offset): Mp4MuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Mp4MuxingListQueryParams
     */
    public function limit(int $limit): Mp4MuxingListQueryParams
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
