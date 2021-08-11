<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Dtsx;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DtsXAudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DtsXAudioConfigurationListQueryParams
     */
    public static function create(): DtsXAudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DtsXAudioConfigurationListQueryParams
     */
    public function offset(int $offset): DtsXAudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DtsXAudioConfigurationListQueryParams
     */
    public function limit(int $limit): DtsXAudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DtsXAudioConfigurationListQueryParams
     */
    public function name(string $name): DtsXAudioConfigurationListQueryParams
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
