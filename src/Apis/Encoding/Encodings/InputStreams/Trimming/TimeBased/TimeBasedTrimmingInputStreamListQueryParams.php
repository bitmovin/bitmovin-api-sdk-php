<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TimeBased;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class TimeBasedTrimmingInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return TimeBasedTrimmingInputStreamListQueryParams
     */
    public static function create(): TimeBasedTrimmingInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return TimeBasedTrimmingInputStreamListQueryParams
     */
    public function offset(int $offset): TimeBasedTrimmingInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return TimeBasedTrimmingInputStreamListQueryParams
     */
    public function limit(int $limit): TimeBasedTrimmingInputStreamListQueryParams
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
