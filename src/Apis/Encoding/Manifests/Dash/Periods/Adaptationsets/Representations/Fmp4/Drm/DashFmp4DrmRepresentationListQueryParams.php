<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Fmp4\Drm;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DashFmp4DrmRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashFmp4DrmRepresentationListQueryParams
     */
    public static function create(): DashFmp4DrmRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashFmp4DrmRepresentationListQueryParams
     */
    public function offset(int $offset): DashFmp4DrmRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashFmp4DrmRepresentationListQueryParams
     */
    public function limit(int $limit): DashFmp4DrmRepresentationListQueryParams
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
