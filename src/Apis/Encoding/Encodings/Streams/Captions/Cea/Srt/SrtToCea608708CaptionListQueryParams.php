<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Srt;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SrtToCea608708CaptionListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SrtToCea608708CaptionListQueryParams
     */
    public static function create(): SrtToCea608708CaptionListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SrtToCea608708CaptionListQueryParams
     */
    public function offset(int $offset): SrtToCea608708CaptionListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SrtToCea608708CaptionListQueryParams
     */
    public function limit(int $limit): SrtToCea608708CaptionListQueryParams
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
