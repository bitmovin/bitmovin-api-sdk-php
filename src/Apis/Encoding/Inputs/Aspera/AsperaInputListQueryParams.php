<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Aspera;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AsperaInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AsperaInputListQueryParams
     */
    public static function create(): AsperaInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AsperaInputListQueryParams
     */
    public function offset(int $offset): AsperaInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AsperaInputListQueryParams
     */
    public function limit(int $limit): AsperaInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AsperaInputListQueryParams
     */
    public function name(string $name): AsperaInputListQueryParams
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
