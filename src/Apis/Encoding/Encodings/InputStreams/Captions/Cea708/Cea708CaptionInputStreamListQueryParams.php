<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\Cea708;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Cea708CaptionInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return Cea708CaptionInputStreamListQueryParams
     */
    public static function create(): Cea708CaptionInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Cea708CaptionInputStreamListQueryParams
     */
    public function offset(int $offset): Cea708CaptionInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Cea708CaptionInputStreamListQueryParams
     */
    public function limit(int $limit): Cea708CaptionInputStreamListQueryParams
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
