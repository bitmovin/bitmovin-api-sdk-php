<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Passthrough;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PassthroughAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return PassthroughAudioConfigurationListQueryParams
     */
    public static function create(): PassthroughAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PassthroughAudioConfigurationListQueryParams
     */
    public function offset(int $offset): PassthroughAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PassthroughAudioConfigurationListQueryParams
     */
    public function limit(int $limit): PassthroughAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return PassthroughAudioConfigurationListQueryParams
     */
    public function name(string $name): PassthroughAudioConfigurationListQueryParams
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
