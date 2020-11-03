<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\RedundantRtmp;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class RedundantRtmpInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return RedundantRtmpInputListQueryParams
     */
    public static function create(): RedundantRtmpInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return RedundantRtmpInputListQueryParams
     */
    public function offset(int $offset): RedundantRtmpInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return RedundantRtmpInputListQueryParams
     */
    public function limit(int $limit): RedundantRtmpInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return RedundantRtmpInputListQueryParams
     */
    public function name(string $name): RedundantRtmpInputListQueryParams
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
