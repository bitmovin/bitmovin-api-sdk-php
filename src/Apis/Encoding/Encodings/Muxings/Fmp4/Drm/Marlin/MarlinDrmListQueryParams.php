<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Marlin;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class MarlinDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return MarlinDrmListQueryParams
     */
    public static function create(): MarlinDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return MarlinDrmListQueryParams
     */
    public function offset(int $offset): MarlinDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return MarlinDrmListQueryParams
     */
    public function limit(int $limit): MarlinDrmListQueryParams
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
