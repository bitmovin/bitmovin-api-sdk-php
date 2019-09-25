<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings;

use BitmovinApiSdk\Common\QueryParams;
use \BitmovinApiSdk\Models\CloudRegion;

class EncodingListQueryParams implements QueryParams
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

    /** @var CloudRegion */
    private $cloudRegion;

    /** @var string */
    private $encoderVersion;

    /** @var string */
    private $name;

    /** @var string */
    private $search;

    /**
     * @return EncodingListQueryParams
     */
    public static function create(): EncodingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EncodingListQueryParams
     */
    public function offset(int $offset): EncodingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EncodingListQueryParams
     */
    public function limit(int $limit): EncodingListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return EncodingListQueryParams
     */
    public function sort(string $sort): EncodingListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $type
     * @return EncodingListQueryParams
     */
    public function type(string $type): EncodingListQueryParams
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $status
     * @return EncodingListQueryParams
     */
    public function status(string $status): EncodingListQueryParams
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param CloudRegion $cloudRegion
     * @return EncodingListQueryParams
     */
    public function cloudRegion(CloudRegion $cloudRegion): EncodingListQueryParams
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }

    /**
     * @param string $encoderVersion
     * @return EncodingListQueryParams
     */
    public function encoderVersion(string $encoderVersion): EncodingListQueryParams
    {
        $this->encoderVersion = $encoderVersion;

        return $this;
    }

    /**
     * @param string $name
     * @return EncodingListQueryParams
     */
    public function name(string $name): EncodingListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $search
     * @return EncodingListQueryParams
     */
    public function search(string $search): EncodingListQueryParams
    {
        $this->search = $search;

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
