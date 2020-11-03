<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StreamInfoListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return StreamInfoListQueryParams
     */
    public static function create(): StreamInfoListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamInfoListQueryParams
     */
    public function offset(int $offset): StreamInfoListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamInfoListQueryParams
     */
    public function limit(int $limit): StreamInfoListQueryParams
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
