<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\Imsc;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class ImscConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return ImscConfigurationListQueryParams
     */
    public static function create(): ImscConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ImscConfigurationListQueryParams
     */
    public function offset(int $offset): ImscConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ImscConfigurationListQueryParams
     */
    public function limit(int $limit): ImscConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return ImscConfigurationListQueryParams
     */
    public function name(string $name): ImscConfigurationListQueryParams
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
