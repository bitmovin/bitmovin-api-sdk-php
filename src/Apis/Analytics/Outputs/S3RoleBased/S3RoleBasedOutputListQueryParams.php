<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\S3RoleBased;

use BitmovinApiSdk\Common\QueryParams;

class S3RoleBasedOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return S3RoleBasedOutputListQueryParams
     */
    public static function create(): S3RoleBasedOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return S3RoleBasedOutputListQueryParams
     */
    public function offset(int $offset): S3RoleBasedOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return S3RoleBasedOutputListQueryParams
     */
    public function limit(int $limit): S3RoleBasedOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return S3RoleBasedOutputListQueryParams
     */
    public function name(string $name): S3RoleBasedOutputListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}
