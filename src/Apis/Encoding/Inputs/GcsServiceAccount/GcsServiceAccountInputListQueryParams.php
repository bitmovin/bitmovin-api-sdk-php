<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\GcsServiceAccount;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class GcsServiceAccountInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return GcsServiceAccountInputListQueryParams
     */
    public static function create(): GcsServiceAccountInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GcsServiceAccountInputListQueryParams
     */
    public function offset(int $offset): GcsServiceAccountInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GcsServiceAccountInputListQueryParams
     */
    public function limit(int $limit): GcsServiceAccountInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return GcsServiceAccountInputListQueryParams
     */
    public function name(string $name): GcsServiceAccountInputListQueryParams
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
