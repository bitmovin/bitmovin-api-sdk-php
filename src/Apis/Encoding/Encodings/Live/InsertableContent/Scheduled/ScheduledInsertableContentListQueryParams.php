<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\Scheduled;

use BitmovinApiSdk\Common\QueryParams;

class ScheduledInsertableContentListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ScheduledInsertableContentListQueryParams
     */
    public static function create(): ScheduledInsertableContentListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ScheduledInsertableContentListQueryParams
     */
    public function offset(int $offset): ScheduledInsertableContentListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ScheduledInsertableContentListQueryParams
     */
    public function limit(int $limit): ScheduledInsertableContentListQueryParams
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
