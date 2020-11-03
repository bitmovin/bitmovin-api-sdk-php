<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveMov;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class ProgressiveMovMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ProgressiveMovMuxingListQueryParams
     */
    public static function create(): ProgressiveMovMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ProgressiveMovMuxingListQueryParams
     */
    public function offset(int $offset): ProgressiveMovMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ProgressiveMovMuxingListQueryParams
     */
    public function limit(int $limit): ProgressiveMovMuxingListQueryParams
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
