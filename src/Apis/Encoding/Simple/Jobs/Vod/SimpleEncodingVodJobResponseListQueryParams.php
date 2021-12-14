<?php

namespace BitmovinApiSdk\Apis\Encoding\Simple\Jobs\Vod;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SimpleEncodingVodJobResponseListQueryParams implements QueryParams
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
     * @return SimpleEncodingVodJobResponseListQueryParams
     */
    public static function create(): SimpleEncodingVodJobResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SimpleEncodingVodJobResponseListQueryParams
     */
    public function offset(int $offset): SimpleEncodingVodJobResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SimpleEncodingVodJobResponseListQueryParams
     */
    public function limit(int $limit): SimpleEncodingVodJobResponseListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return SimpleEncodingVodJobResponseListQueryParams
     */
    public function sort(string $sort): SimpleEncodingVodJobResponseListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $status
     * @return SimpleEncodingVodJobResponseListQueryParams
     */
    public function status(string $status): SimpleEncodingVodJobResponseListQueryParams
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
