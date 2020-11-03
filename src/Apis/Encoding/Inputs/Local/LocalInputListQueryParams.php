<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Local;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class LocalInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return LocalInputListQueryParams
     */
    public static function create(): LocalInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LocalInputListQueryParams
     */
    public function offset(int $offset): LocalInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LocalInputListQueryParams
     */
    public function limit(int $limit): LocalInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return LocalInputListQueryParams
     */
    public function name(string $name): LocalInputListQueryParams
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
