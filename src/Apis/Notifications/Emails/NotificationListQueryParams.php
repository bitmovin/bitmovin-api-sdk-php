<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails;

use BitmovinApiSdk\Common\QueryParams;

class NotificationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return NotificationListQueryParams
     */
    public static function create(): NotificationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return NotificationListQueryParams
     */
    public function offset(int $offset): NotificationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return NotificationListQueryParams
     */
    public function limit(int $limit): NotificationListQueryParams
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
