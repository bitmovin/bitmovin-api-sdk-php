<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TimecodeTrack;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class TimecodeTrackTrimmingInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return TimecodeTrackTrimmingInputStreamListQueryParams
     */
    public static function create(): TimecodeTrackTrimmingInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return TimecodeTrackTrimmingInputStreamListQueryParams
     */
    public function offset(int $offset): TimecodeTrackTrimmingInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return TimecodeTrackTrimmingInputStreamListQueryParams
     */
    public function limit(int $limit): TimecodeTrackTrimmingInputStreamListQueryParams
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
