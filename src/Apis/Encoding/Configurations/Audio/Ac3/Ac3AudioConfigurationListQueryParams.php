<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Ac3;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class Ac3AudioConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return Ac3AudioConfigurationListQueryParams
     */
    public static function create(): Ac3AudioConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Ac3AudioConfigurationListQueryParams
     */
    public function offset(int $offset): Ac3AudioConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Ac3AudioConfigurationListQueryParams
     */
    public function limit(int $limit): Ac3AudioConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return Ac3AudioConfigurationListQueryParams
     */
    public function name(string $name): Ac3AudioConfigurationListQueryParams
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
