<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\S3RoleBased;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AnalyticsS3RoleBasedOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AnalyticsS3RoleBasedOutputListQueryParams
     */
    public static function create(): AnalyticsS3RoleBasedOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsS3RoleBasedOutputListQueryParams
     */
    public function offset(int $offset): AnalyticsS3RoleBasedOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsS3RoleBasedOutputListQueryParams
     */
    public function limit(int $limit): AnalyticsS3RoleBasedOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AnalyticsS3RoleBasedOutputListQueryParams
     */
    public function name(string $name): AnalyticsS3RoleBasedOutputListQueryParams
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
