<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Gcs;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class GcsOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return GcsOutputListQueryParams
     */
    public static function create(): GcsOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GcsOutputListQueryParams
     */
    public function offset(int $offset): GcsOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GcsOutputListQueryParams
     */
    public function limit(int $limit): GcsOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return GcsOutputListQueryParams
     */
    public function name(string $name): GcsOutputListQueryParams
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
