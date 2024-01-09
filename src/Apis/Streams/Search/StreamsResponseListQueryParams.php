<?php

namespace BitmovinApiSdk\Apis\Streams\Search;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;
use StreamsType;
use StreamsVideoStatus;

class StreamsResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $query;

    /** @var StreamsType */
    private $type;

    /** @var StreamsVideoStatus */
    private $status;

    /** @var string */
    private $createdBefore;

    /** @var string */
    private $createdAfter;

    /** @var bool */
    private $signed;

    /** @var bool */
    private $domainRestricted;

    /**
     * @return StreamsResponseListQueryParams
     */
    public static function create(): StreamsResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamsResponseListQueryParams
     */
    public function offset(int $offset): StreamsResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamsResponseListQueryParams
     */
    public function limit(int $limit): StreamsResponseListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $query
     * @return StreamsResponseListQueryParams
     */
    public function query(string $query): StreamsResponseListQueryParams
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param StreamsType $type
     * @return StreamsResponseListQueryParams
     */
    public function type(StreamsType $type): StreamsResponseListQueryParams
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param StreamsVideoStatus $status
     * @return StreamsResponseListQueryParams
     */
    public function status(StreamsVideoStatus $status): StreamsResponseListQueryParams
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string $createdBefore
     * @return StreamsResponseListQueryParams
     */
    public function createdBefore(string $createdBefore): StreamsResponseListQueryParams
    {
        $this->createdBefore = $createdBefore;

        return $this;
    }

    /**
     * @param string $createdAfter
     * @return StreamsResponseListQueryParams
     */
    public function createdAfter(string $createdAfter): StreamsResponseListQueryParams
    {
        $this->createdAfter = $createdAfter;

        return $this;
    }

    /**
     * @param bool $signed
     * @return StreamsResponseListQueryParams
     */
    public function signed(bool $signed): StreamsResponseListQueryParams
    {
        $this->signed = $signed;

        return $this;
    }

    /**
     * @param bool $domainRestricted
     * @return StreamsResponseListQueryParams
     */
    public function domainRestricted(bool $domainRestricted): StreamsResponseListQueryParams
    {
        $this->domainRestricted = $domainRestricted;

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
