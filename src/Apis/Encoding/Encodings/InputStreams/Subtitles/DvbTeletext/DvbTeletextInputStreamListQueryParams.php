<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\DvbTeletext;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DvbTeletextInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DvbTeletextInputStreamListQueryParams
     */
    public static function create(): DvbTeletextInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DvbTeletextInputStreamListQueryParams
     */
    public function offset(int $offset): DvbTeletextInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DvbTeletextInputStreamListQueryParams
     */
    public function limit(int $limit): DvbTeletextInputStreamListQueryParams
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
