<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\SubOrganizations;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class OrganizationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return OrganizationListQueryParams
     */
    public static function create(): OrganizationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return OrganizationListQueryParams
     */
    public function offset(int $offset): OrganizationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return OrganizationListQueryParams
     */
    public function limit(int $limit): OrganizationListQueryParams
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
