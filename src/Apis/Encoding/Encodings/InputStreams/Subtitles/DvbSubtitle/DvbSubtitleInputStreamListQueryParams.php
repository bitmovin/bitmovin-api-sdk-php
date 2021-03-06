<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\DvbSubtitle;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DvbSubtitleInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DvbSubtitleInputStreamListQueryParams
     */
    public static function create(): DvbSubtitleInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DvbSubtitleInputStreamListQueryParams
     */
    public function offset(int $offset): DvbSubtitleInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DvbSubtitleInputStreamListQueryParams
     */
    public function limit(int $limit): DvbSubtitleInputStreamListQueryParams
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
