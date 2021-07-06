<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyDigitalPlus;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DolbyDigitalPlusAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DolbyDigitalPlusAudioConfigurationListQueryParams
     */
    public static function create(): DolbyDigitalPlusAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DolbyDigitalPlusAudioConfigurationListQueryParams
     */
    public function offset(int $offset): DolbyDigitalPlusAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DolbyDigitalPlusAudioConfigurationListQueryParams
     */
    public function limit(int $limit): DolbyDigitalPlusAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DolbyDigitalPlusAudioConfigurationListQueryParams
     */
    public function name(string $name): DolbyDigitalPlusAudioConfigurationListQueryParams
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
