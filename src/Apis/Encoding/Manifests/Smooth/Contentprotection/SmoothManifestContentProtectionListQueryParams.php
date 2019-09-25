<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Contentprotection;

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
