<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Srt;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SrtInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return SrtInputListQueryParams
     */
    public static function create(): SrtInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SrtInputListQueryParams
     */
    public function offset(int $offset): SrtInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SrtInputListQueryParams
     */
    public function limit(int $limit): SrtInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return SrtInputListQueryParams
     */
    public function name(string $name): SrtInputListQueryParams
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
