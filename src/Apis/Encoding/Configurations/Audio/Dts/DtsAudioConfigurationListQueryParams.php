<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Dts;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DtsAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DtsAudioConfigurationListQueryParams
     */
    public static function create(): DtsAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DtsAudioConfigurationListQueryParams
     */
    public function offset(int $offset): DtsAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DtsAudioConfigurationListQueryParams
     */
    public function limit(int $limit): DtsAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DtsAudioConfigurationListQueryParams
     */
    public function name(string $name): DtsAudioConfigurationListQueryParams
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
