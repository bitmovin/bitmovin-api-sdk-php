<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Watermarking\NexguardFileMarker;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class NexGuardFileMarkerListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return NexGuardFileMarkerListQueryParams
     */
    public static function create(): NexGuardFileMarkerListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return NexGuardFileMarkerListQueryParams
     */
    public function offset(int $offset): NexGuardFileMarkerListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return NexGuardFileMarkerListQueryParams
     */
    public function limit(int $limit): NexGuardFileMarkerListQueryParams
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
