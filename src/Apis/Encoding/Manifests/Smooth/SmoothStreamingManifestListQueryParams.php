<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SmoothStreamingManifestListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $encodingId;

    /**
     * @return SmoothStreamingManifestListQueryParams
     */
    public static function create(): SmoothStreamingManifestListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SmoothStreamingManifestListQueryParams
     */
    public function offset(int $offset): SmoothStreamingManifestListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SmoothStreamingManifestListQueryParams
     */
    public function limit(int $limit): SmoothStreamingManifestListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $encodingId
     * @return SmoothStreamingManifestListQueryParams
     */
    public function encodingId(string $encodingId): SmoothStreamingManifestListQueryParams
    {
        $this->encodingId = $encodingId;

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
