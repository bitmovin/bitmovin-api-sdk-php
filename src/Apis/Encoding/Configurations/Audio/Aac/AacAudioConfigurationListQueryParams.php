<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Aac;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AacAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AacAudioConfigurationListQueryParams
     */
    public static function create(): AacAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AacAudioConfigurationListQueryParams
     */
    public function offset(int $offset): AacAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AacAudioConfigurationListQueryParams
     */
    public function limit(int $limit): AacAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AacAudioConfigurationListQueryParams
     */
    public function name(string $name): AacAudioConfigurationListQueryParams
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
