<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Imsc;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DashImscRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashImscRepresentationListQueryParams
     */
    public static function create(): DashImscRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashImscRepresentationListQueryParams
     */
    public function offset(int $offset): DashImscRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashImscRepresentationListQueryParams
     */
    public function limit(int $limit): DashImscRepresentationListQueryParams
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
