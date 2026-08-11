<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\DolbyLoudness;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DolbyLoudnessFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DolbyLoudnessFilterListQueryParams
     */
    public static function create(): DolbyLoudnessFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DolbyLoudnessFilterListQueryParams
     */
    public function offset(int $offset): DolbyLoudnessFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DolbyLoudnessFilterListQueryParams
     */
    public function limit(int $limit): DolbyLoudnessFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DolbyLoudnessFilterListQueryParams
     */
    public function name(string $name): DolbyLoudnessFilterListQueryParams
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
