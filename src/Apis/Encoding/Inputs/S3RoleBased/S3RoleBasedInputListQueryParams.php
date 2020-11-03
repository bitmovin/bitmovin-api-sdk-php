<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\S3RoleBased;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class S3RoleBasedInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return S3RoleBasedInputListQueryParams
     */
    public static function create(): S3RoleBasedInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return S3RoleBasedInputListQueryParams
     */
    public function offset(int $offset): S3RoleBasedInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return S3RoleBasedInputListQueryParams
     */
    public function limit(int $limit): S3RoleBasedInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return S3RoleBasedInputListQueryParams
     */
    public function name(string $name): S3RoleBasedInputListQueryParams
    {
        $this->name = $name;

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
