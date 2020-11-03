<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiNetstorage;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AkamaiNetStorageOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AkamaiNetStorageOutputListQueryParams
     */
    public static function create(): AkamaiNetStorageOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AkamaiNetStorageOutputListQueryParams
     */
    public function offset(int $offset): AkamaiNetStorageOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AkamaiNetStorageOutputListQueryParams
     */
    public function limit(int $limit): AkamaiNetStorageOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AkamaiNetStorageOutputListQueryParams
     */
    public function name(string $name): AkamaiNetStorageOutputListQueryParams
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
