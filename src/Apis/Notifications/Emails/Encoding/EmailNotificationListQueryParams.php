<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\Encoding;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class EmailNotificationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return EmailNotificationListQueryParams
     */
    public static function create(): EmailNotificationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EmailNotificationListQueryParams
     */
    public function offset(int $offset): EmailNotificationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EmailNotificationListQueryParams
     */
    public function limit(int $limit): EmailNotificationListQueryParams
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
