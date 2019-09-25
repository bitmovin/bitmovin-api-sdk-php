<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AudioVolume;

use BitmovinApiSdk\Common\QueryParams;

class AudioVolumeFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AudioVolumeFilterListQueryParams
     */
    public static function create(): AudioVolumeFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AudioVolumeFilterListQueryParams
     */
    public function offset(int $offset): AudioVolumeFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AudioVolumeFilterListQueryParams
     */
    public function limit(int $limit): AudioVolumeFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AudioVolumeFilterListQueryParams
     */
    public function name(string $name): AudioVolumeFilterListQueryParams
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
