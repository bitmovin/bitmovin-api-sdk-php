<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Pcm;

use BitmovinApiSdk\Common\QueryParams;

class PcmAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return PcmAudioConfigurationListQueryParams
     */
    public static function create(): PcmAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PcmAudioConfigurationListQueryParams
     */
    public function offset(int $offset): PcmAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PcmAudioConfigurationListQueryParams
     */
    public function limit(int $limit): PcmAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return PcmAudioConfigurationListQueryParams
     */
    public function name(string $name): PcmAudioConfigurationListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}
