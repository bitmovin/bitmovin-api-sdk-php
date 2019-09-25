<?php

namespace BitmovinApiSdk\Apis\Notifications;

use BitmovinApiSdk\Common\QueryParams;

class NotificationStateEntryListByNotificationIdQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return NotificationStateEntryListByNotificationIdQueryParams
     */
    public static function create(): NotificationStateEntryListByNotificationIdQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return NotificationStateEntryListByNotificationIdQueryParams
     */
    public function offset(int $offset): NotificationStateEntryListByNotificationIdQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return NotificationStateEntryListByNotificationIdQueryParams
     */
    public function limit(int $limit): NotificationStateEntryListByNotificationIdQueryParams
    {
        $this->limit = $limit;

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
