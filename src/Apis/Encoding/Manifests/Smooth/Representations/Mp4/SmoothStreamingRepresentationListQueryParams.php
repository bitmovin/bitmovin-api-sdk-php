<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Representations\Mp4;

use BitmovinApiSdk\Common\QueryParams;

class SmoothStreamingRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SmoothStreamingRepresentationListQueryParams
     */
    public static function create(): SmoothStreamingRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SmoothStreamingRepresentationListQueryParams
     */
    public function offset(int $offset): SmoothStreamingRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SmoothStreamingRepresentationListQueryParams
     */
    public function limit(int $limit): SmoothStreamingRepresentationListQueryParams
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
