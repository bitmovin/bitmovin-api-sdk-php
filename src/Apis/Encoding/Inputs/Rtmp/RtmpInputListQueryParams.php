<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Rtmp;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class RtmpInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return RtmpInputListQueryParams
     */
    public static function create(): RtmpInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return RtmpInputListQueryParams
     */
    public function offset(int $offset): RtmpInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return RtmpInputListQueryParams
     */
    public function limit(int $limit): RtmpInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return RtmpInputListQueryParams
     */
    public function name(string $name): RtmpInputListQueryParams
    {
        $this->name = $name;

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
