<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\S3;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class S3InputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return S3InputListQueryParams
     */
    public static function create(): S3InputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return S3InputListQueryParams
     */
    public function offset(int $offset): S3InputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return S3InputListQueryParams
     */
    public function limit(int $limit): S3InputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return S3InputListQueryParams
     */
    public function name(string $name): S3InputListQueryParams
    {
        $this->name = $name;

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
