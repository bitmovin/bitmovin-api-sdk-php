<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\GcsServiceAccount;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AnalyticsGcsServiceAccountOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AnalyticsGcsServiceAccountOutputListQueryParams
     */
    public static function create(): AnalyticsGcsServiceAccountOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsGcsServiceAccountOutputListQueryParams
     */
    public function offset(int $offset): AnalyticsGcsServiceAccountOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsGcsServiceAccountOutputListQueryParams
     */
    public function limit(int $limit): AnalyticsGcsServiceAccountOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AnalyticsGcsServiceAccountOutputListQueryParams
     */
    public function name(string $name): AnalyticsGcsServiceAccountOutputListQueryParams
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
