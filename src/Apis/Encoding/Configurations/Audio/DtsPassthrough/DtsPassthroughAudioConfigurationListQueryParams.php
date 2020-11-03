<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DtsPassthrough;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DtsPassthroughAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DtsPassthroughAudioConfigurationListQueryParams
     */
    public static function create(): DtsPassthroughAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DtsPassthroughAudioConfigurationListQueryParams
     */
    public function offset(int $offset): DtsPassthroughAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DtsPassthroughAudioConfigurationListQueryParams
     */
    public function limit(int $limit): DtsPassthroughAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DtsPassthroughAudioConfigurationListQueryParams
     */
    public function name(string $name): DtsPassthroughAudioConfigurationListQueryParams
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
