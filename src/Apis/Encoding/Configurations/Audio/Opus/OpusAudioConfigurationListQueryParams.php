<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Opus;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class OpusAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return OpusAudioConfigurationListQueryParams
     */
    public static function create(): OpusAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return OpusAudioConfigurationListQueryParams
     */
    public function offset(int $offset): OpusAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return OpusAudioConfigurationListQueryParams
     */
    public function limit(int $limit): OpusAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return OpusAudioConfigurationListQueryParams
     */
    public function name(string $name): OpusAudioConfigurationListQueryParams
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
