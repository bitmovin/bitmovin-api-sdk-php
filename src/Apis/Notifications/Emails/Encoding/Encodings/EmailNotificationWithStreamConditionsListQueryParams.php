<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class EmailNotificationWithStreamConditionsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return EmailNotificationWithStreamConditionsListQueryParams
     */
    public static function create(): EmailNotificationWithStreamConditionsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EmailNotificationWithStreamConditionsListQueryParams
     */
    public function offset(int $offset): EmailNotificationWithStreamConditionsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EmailNotificationWithStreamConditionsListQueryParams
     */
    public function limit(int $limit): EmailNotificationWithStreamConditionsListQueryParams
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
