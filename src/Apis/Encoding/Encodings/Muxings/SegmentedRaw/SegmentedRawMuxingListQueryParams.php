<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\SegmentedRaw;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SegmentedRawMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SegmentedRawMuxingListQueryParams
     */
    public static function create(): SegmentedRawMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SegmentedRawMuxingListQueryParams
     */
    public function offset(int $offset): SegmentedRawMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SegmentedRawMuxingListQueryParams
     */
    public function limit(int $limit): SegmentedRawMuxingListQueryParams
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
