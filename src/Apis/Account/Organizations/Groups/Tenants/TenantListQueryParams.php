<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups\Tenants;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class TenantListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return TenantListQueryParams
     */
    public static function create(): TenantListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return TenantListQueryParams
     */
    public function offset(int $offset): TenantListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return TenantListQueryParams
     */
    public function limit(int $limit): TenantListQueryParams
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
