<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Video;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class VideoMediaInfoListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return VideoMediaInfoListQueryParams
     */
    public static function create(): VideoMediaInfoListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return VideoMediaInfoListQueryParams
     */
    public function offset(int $offset): VideoMediaInfoListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return VideoMediaInfoListQueryParams
     */
    public function limit(int $limit): VideoMediaInfoListQueryParams
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
