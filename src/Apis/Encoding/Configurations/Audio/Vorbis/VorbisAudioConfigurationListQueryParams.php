<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Vorbis;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class VorbisAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return VorbisAudioConfigurationListQueryParams
     */
    public static function create(): VorbisAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return VorbisAudioConfigurationListQueryParams
     */
    public function offset(int $offset): VorbisAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return VorbisAudioConfigurationListQueryParams
     */
    public function limit(int $limit): VorbisAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return VorbisAudioConfigurationListQueryParams
     */
    public function name(string $name): VorbisAudioConfigurationListQueryParams
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
