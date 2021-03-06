<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PeriodListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PeriodListQueryParams
     */
    public static function create(): PeriodListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PeriodListQueryParams
     */
    public function offset(int $offset): PeriodListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PeriodListQueryParams
     */
    public function limit(int $limit): PeriodListQueryParams
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
