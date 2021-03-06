<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Aws;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AwsAccountListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AwsAccountListQueryParams
     */
    public static function create(): AwsAccountListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AwsAccountListQueryParams
     */
    public function offset(int $offset): AwsAccountListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AwsAccountListQueryParams
     */
    public function limit(int $limit): AwsAccountListQueryParams
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
