<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\Cea608;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Cea608CaptionInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return Cea608CaptionInputStreamListQueryParams
     */
    public static function create(): Cea608CaptionInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Cea608CaptionInputStreamListQueryParams
     */
    public function offset(int $offset): Cea608CaptionInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Cea608CaptionInputStreamListQueryParams
     */
    public function limit(int $limit): Cea608CaptionInputStreamListQueryParams
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
