<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\H264PictureTiming;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class H264PictureTimingTrimmingInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return H264PictureTimingTrimmingInputStreamListQueryParams
     */
    public static function create(): H264PictureTimingTrimmingInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return H264PictureTimingTrimmingInputStreamListQueryParams
     */
    public function offset(int $offset): H264PictureTimingTrimmingInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return H264PictureTimingTrimmingInputStreamListQueryParams
     */
    public function limit(int $limit): H264PictureTimingTrimmingInputStreamListQueryParams
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
