<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp3;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Mp3AudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return Mp3AudioConfigurationListQueryParams
     */
    public static function create(): Mp3AudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Mp3AudioConfigurationListQueryParams
     */
    public function offset(int $offset): Mp3AudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Mp3AudioConfigurationListQueryParams
     */
    public function limit(int $limit): Mp3AudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return Mp3AudioConfigurationListQueryParams
     */
    public function name(string $name): Mp3AudioConfigurationListQueryParams
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
