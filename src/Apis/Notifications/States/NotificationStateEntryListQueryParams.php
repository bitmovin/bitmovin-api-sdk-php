<?php

namespace BitmovinApiSdk\Apis\Notifications\States;

use BitmovinApiSdk\Common\QueryParams;

class NotificationStateEntryListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return NotificationStateEntryListQueryParams
     */
    public static function create(): NotificationStateEntryListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return NotificationStateEntryListQueryParams
     */
    public function offset(int $offset): NotificationStateEntryListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return NotificationStateEntryListQueryParams
     */
    public function limit(int $limit): NotificationStateEntryListQueryParams
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
