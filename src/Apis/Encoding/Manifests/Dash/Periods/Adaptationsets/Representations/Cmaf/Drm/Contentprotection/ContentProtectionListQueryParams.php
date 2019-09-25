<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Cmaf\Drm\Contentprotection;

use BitmovinApiSdk\Common\QueryParams;

class ContentProtectionListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ContentProtectionListQueryParams
     */
    public static function create(): ContentProtectionListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ContentProtectionListQueryParams
     */
    public function offset(int $offset): ContentProtectionListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ContentProtectionListQueryParams
     */
    public function limit(int $limit): ContentProtectionListQueryParams
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
