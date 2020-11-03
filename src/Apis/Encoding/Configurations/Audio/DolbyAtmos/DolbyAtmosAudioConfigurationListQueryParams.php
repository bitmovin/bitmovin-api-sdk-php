<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyAtmos;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DolbyAtmosAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DolbyAtmosAudioConfigurationListQueryParams
     */
    public static function create(): DolbyAtmosAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DolbyAtmosAudioConfigurationListQueryParams
     */
    public function offset(int $offset): DolbyAtmosAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DolbyAtmosAudioConfigurationListQueryParams
     */
    public function limit(int $limit): DolbyAtmosAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DolbyAtmosAudioConfigurationListQueryParams
     */
    public function name(string $name): DolbyAtmosAudioConfigurationListQueryParams
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
