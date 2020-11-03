<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\AkamaiNetstorage;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AkamaiNetStorageInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AkamaiNetStorageInputListQueryParams
     */
    public static function create(): AkamaiNetStorageInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AkamaiNetStorageInputListQueryParams
     */
    public function offset(int $offset): AkamaiNetStorageInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AkamaiNetStorageInputListQueryParams
     */
    public function limit(int $limit): AkamaiNetStorageInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AkamaiNetStorageInputListQueryParams
     */
    public function name(string $name): AkamaiNetStorageInputListQueryParams
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
