<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Video;

use BitmovinApiSdk\Common\QueryParams;

class VideoAdaptationSetListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return VideoAdaptationSetListQueryParams
     */
    public static function create(): VideoAdaptationSetListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return VideoAdaptationSetListQueryParams
     */
    public function offset(int $offset): VideoAdaptationSetListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return VideoAdaptationSetListQueryParams
     */
    public function limit(int $limit): VideoAdaptationSetListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}
