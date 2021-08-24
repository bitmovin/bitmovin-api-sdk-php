<?php

namespace BitmovinApiSdk\Apis\Encoding\WatchFolders;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class WatchFolderListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return WatchFolderListQueryParams
     */
    public static function create(): WatchFolderListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return WatchFolderListQueryParams
     */
    public function offset(int $offset): WatchFolderListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return WatchFolderListQueryParams
     */
    public function limit(int $limit): WatchFolderListQueryParams
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
