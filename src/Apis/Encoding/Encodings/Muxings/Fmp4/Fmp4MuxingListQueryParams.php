<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Fmp4MuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return Fmp4MuxingListQueryParams
     */
    public static function create(): Fmp4MuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Fmp4MuxingListQueryParams
     */
    public function offset(int $offset): Fmp4MuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Fmp4MuxingListQueryParams
     */
    public function limit(int $limit): Fmp4MuxingListQueryParams
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
