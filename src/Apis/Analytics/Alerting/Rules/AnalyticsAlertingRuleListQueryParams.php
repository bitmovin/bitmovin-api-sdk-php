<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting\Rules;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AnalyticsAlertingRuleListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AnalyticsAlertingRuleListQueryParams
     */
    public static function create(): AnalyticsAlertingRuleListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsAlertingRuleListQueryParams
     */
    public function offset(int $offset): AnalyticsAlertingRuleListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsAlertingRuleListQueryParams
     */
    public function limit(int $limit): AnalyticsAlertingRuleListQueryParams
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
