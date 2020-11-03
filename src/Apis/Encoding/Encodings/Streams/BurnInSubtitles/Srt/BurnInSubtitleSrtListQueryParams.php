<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Srt;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class BurnInSubtitleSrtListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return BurnInSubtitleSrtListQueryParams
     */
    public static function create(): BurnInSubtitleSrtListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return BurnInSubtitleSrtListQueryParams
     */
    public function offset(int $offset): BurnInSubtitleSrtListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return BurnInSubtitleSrtListQueryParams
     */
    public function limit(int $limit): BurnInSubtitleSrtListQueryParams
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
