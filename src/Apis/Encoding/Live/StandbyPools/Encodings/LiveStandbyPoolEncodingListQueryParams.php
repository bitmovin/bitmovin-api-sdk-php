<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class LiveStandbyPoolEncodingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

    /** @var string */
    private $status;

    /**
     * @return LiveStandbyPoolEncodingListQueryParams
     */
    public static function create(): LiveStandbyPoolEncodingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LiveStandbyPoolEncodingListQueryParams
     */
    public function offset(int $offset): LiveStandbyPoolEncodingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LiveStandbyPoolEncodingListQueryParams
     */
    public function limit(int $limit): LiveStandbyPoolEncodingListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return LiveStandbyPoolEncodingListQueryParams
     */
    public function sort(string $sort): LiveStandbyPoolEncodingListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $status
     * @return LiveStandbyPoolEncodingListQueryParams
     */
    public function status(string $status): LiveStandbyPoolEncodingListQueryParams
    {
        $this->status = $status;

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
