<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Assa;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class BurnInSubtitleAssaListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return BurnInSubtitleAssaListQueryParams
     */
    public static function create(): BurnInSubtitleAssaListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return BurnInSubtitleAssaListQueryParams
     */
    public function offset(int $offset): BurnInSubtitleAssaListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return BurnInSubtitleAssaListQueryParams
     */
    public function limit(int $limit): BurnInSubtitleAssaListQueryParams
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
