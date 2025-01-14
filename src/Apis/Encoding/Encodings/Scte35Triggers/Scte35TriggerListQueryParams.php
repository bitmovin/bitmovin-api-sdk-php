<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Scte35Triggers;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Scte35TriggerListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return Scte35TriggerListQueryParams
     */
    public static function create(): Scte35TriggerListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Scte35TriggerListQueryParams
     */
    public function offset(int $offset): Scte35TriggerListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Scte35TriggerListQueryParams
     */
    public function limit(int $limit): Scte35TriggerListQueryParams
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
