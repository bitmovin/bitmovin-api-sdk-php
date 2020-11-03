<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\BroadcastTs;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class BroadcastTsMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return BroadcastTsMuxingListQueryParams
     */
    public static function create(): BroadcastTsMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return BroadcastTsMuxingListQueryParams
     */
    public function offset(int $offset): BroadcastTsMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return BroadcastTsMuxingListQueryParams
     */
    public function limit(int $limit): BroadcastTsMuxingListQueryParams
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
