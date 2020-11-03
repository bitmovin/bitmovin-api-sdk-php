<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Scc;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SccCaptionListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SccCaptionListQueryParams
     */
    public static function create(): SccCaptionListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SccCaptionListQueryParams
     */
    public function offset(int $offset): SccCaptionListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SccCaptionListQueryParams
     */
    public function limit(int $limit): SccCaptionListQueryParams
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
