<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DashRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashRepresentationListQueryParams
     */
    public static function create(): DashRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashRepresentationListQueryParams
     */
    public function offset(int $offset): DashRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashRepresentationListQueryParams
     */
    public function limit(int $limit): DashRepresentationListQueryParams
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
