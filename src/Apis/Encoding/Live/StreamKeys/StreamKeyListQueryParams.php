<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StreamKeys;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StreamKeyListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

    /** @var string */
    private $type;

    /** @var string */
    private $status;

    /** @var string */
    private $assignedIngestPointId;

    /** @var string */
    private $assignedEncodingId;

    /**
     * @return StreamKeyListQueryParams
     */
    public static function create(): StreamKeyListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamKeyListQueryParams
     */
    public function offset(int $offset): StreamKeyListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamKeyListQueryParams
     */
    public function limit(int $limit): StreamKeyListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return StreamKeyListQueryParams
     */
    public function sort(string $sort): StreamKeyListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $type
     * @return StreamKeyListQueryParams
     */
    public function type(string $type): StreamKeyListQueryParams
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $status
     * @return StreamKeyListQueryParams
     */
    public function status(string $status): StreamKeyListQueryParams
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string $assignedIngestPointId
     * @return StreamKeyListQueryParams
     */
    public function assignedIngestPointId(string $assignedIngestPointId): StreamKeyListQueryParams
    {
        $this->assignedIngestPointId = $assignedIngestPointId;

        return $this;
    }

    /**
     * @param string $assignedEncodingId
     * @return StreamKeyListQueryParams
     */
    public function assignedEncodingId(string $assignedEncodingId): StreamKeyListQueryParams
    {
        $this->assignedEncodingId = $assignedEncodingId;

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
