<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AudioMix;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AudioMixFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AudioMixFilterListQueryParams
     */
    public static function create(): AudioMixFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AudioMixFilterListQueryParams
     */
    public function offset(int $offset): AudioMixFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AudioMixFilterListQueryParams
     */
    public function limit(int $limit): AudioMixFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AudioMixFilterListQueryParams
     */
    public function name(string $name): AudioMixFilterListQueryParams
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
