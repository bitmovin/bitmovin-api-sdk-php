<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class GroupListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return GroupListQueryParams
     */
    public static function create(): GroupListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GroupListQueryParams
     */
    public function offset(int $offset): GroupListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GroupListQueryParams
     */
    public function limit(int $limit): GroupListQueryParams
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
