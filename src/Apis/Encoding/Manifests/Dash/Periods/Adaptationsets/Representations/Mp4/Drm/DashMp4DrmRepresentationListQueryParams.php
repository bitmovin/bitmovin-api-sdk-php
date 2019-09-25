<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Mp4\Drm;

use BitmovinApiSdk\Common\QueryParams;

class DashMp4DrmRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashMp4DrmRepresentationListQueryParams
     */
    public static function create(): DashMp4DrmRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashMp4DrmRepresentationListQueryParams
     */
    public function offset(int $offset): DashMp4DrmRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashMp4DrmRepresentationListQueryParams
     */
    public function limit(int $limit): DashMp4DrmRepresentationListQueryParams
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
