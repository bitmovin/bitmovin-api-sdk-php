<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;
use \BitmovinApiSdk\Models\StreamMode;

class MuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var StreamMode */
    private $streamMode;

    /**
     * @return MuxingListQueryParams
     */
    public static function create(): MuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return MuxingListQueryParams
     */
    public function offset(int $offset): MuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return MuxingListQueryParams
     */
    public function limit(int $limit): MuxingListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param StreamMode $streamMode
     * @return MuxingListQueryParams
     */
    public function streamMode(StreamMode $streamMode): MuxingListQueryParams
    {
        $this->streamMode = $streamMode;

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
