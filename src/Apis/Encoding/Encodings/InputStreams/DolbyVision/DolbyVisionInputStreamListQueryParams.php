<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\DolbyVision;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DolbyVisionInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DolbyVisionInputStreamListQueryParams
     */
    public static function create(): DolbyVisionInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DolbyVisionInputStreamListQueryParams
     */
    public function offset(int $offset): DolbyVisionInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DolbyVisionInputStreamListQueryParams
     */
    public function limit(int $limit): DolbyVisionInputStreamListQueryParams
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
