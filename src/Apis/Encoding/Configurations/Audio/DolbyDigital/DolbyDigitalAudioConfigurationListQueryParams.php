<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyDigital;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DolbyDigitalAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DolbyDigitalAudioConfigurationListQueryParams
     */
    public static function create(): DolbyDigitalAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DolbyDigitalAudioConfigurationListQueryParams
     */
    public function offset(int $offset): DolbyDigitalAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DolbyDigitalAudioConfigurationListQueryParams
     */
    public function limit(int $limit): DolbyDigitalAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DolbyDigitalAudioConfigurationListQueryParams
     */
    public function name(string $name): DolbyDigitalAudioConfigurationListQueryParams
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
