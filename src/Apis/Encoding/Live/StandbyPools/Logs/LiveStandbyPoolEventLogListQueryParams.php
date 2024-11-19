<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Logs;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class LiveStandbyPoolEventLogListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

    /** @var string */
    private $eventType;

    /**
     * @return LiveStandbyPoolEventLogListQueryParams
     */
    public static function create(): LiveStandbyPoolEventLogListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LiveStandbyPoolEventLogListQueryParams
     */
    public function offset(int $offset): LiveStandbyPoolEventLogListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LiveStandbyPoolEventLogListQueryParams
     */
    public function limit(int $limit): LiveStandbyPoolEventLogListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return LiveStandbyPoolEventLogListQueryParams
     */
    public function sort(string $sort): LiveStandbyPoolEventLogListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $eventType
     * @return LiveStandbyPoolEventLogListQueryParams
     */
    public function eventType(string $eventType): LiveStandbyPoolEventLogListQueryParams
    {
        $this->eventType = $eventType;

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
