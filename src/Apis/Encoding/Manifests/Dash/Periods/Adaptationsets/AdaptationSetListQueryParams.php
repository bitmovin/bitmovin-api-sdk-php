<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AdaptationSetListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AdaptationSetListQueryParams
     */
    public static function create(): AdaptationSetListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AdaptationSetListQueryParams
     */
    public function offset(int $offset): AdaptationSetListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AdaptationSetListQueryParams
     */
    public function limit(int $limit): AdaptationSetListQueryParams
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
