<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm\Drm\Cenc;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class CencDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return CencDrmListQueryParams
     */
    public static function create(): CencDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return CencDrmListQueryParams
     */
    public function offset(int $offset): CencDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return CencDrmListQueryParams
     */
    public function limit(int $limit): CencDrmListQueryParams
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
