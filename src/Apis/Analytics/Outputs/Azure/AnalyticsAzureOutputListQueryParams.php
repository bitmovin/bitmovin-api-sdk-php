<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\Azure;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AnalyticsAzureOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AnalyticsAzureOutputListQueryParams
     */
    public static function create(): AnalyticsAzureOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsAzureOutputListQueryParams
     */
    public function offset(int $offset): AnalyticsAzureOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsAzureOutputListQueryParams
     */
    public function limit(int $limit): AnalyticsAzureOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AnalyticsAzureOutputListQueryParams
     */
    public function name(string $name): AnalyticsAzureOutputListQueryParams
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
