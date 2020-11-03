<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Contentprotection;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SmoothManifestContentProtectionListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SmoothManifestContentProtectionListQueryParams
     */
    public static function create(): SmoothManifestContentProtectionListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SmoothManifestContentProtectionListQueryParams
     */
    public function offset(int $offset): SmoothManifestContentProtectionListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SmoothManifestContentProtectionListQueryParams
     */
    public function limit(int $limit): SmoothManifestContentProtectionListQueryParams
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
