<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Mp4;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DashMp4RepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashMp4RepresentationListQueryParams
     */
    public static function create(): DashMp4RepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashMp4RepresentationListQueryParams
     */
    public function offset(int $offset): DashMp4RepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashMp4RepresentationListQueryParams
     */
    public function limit(int $limit): DashMp4RepresentationListQueryParams
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
