<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Cdn;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class CdnOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return CdnOutputListQueryParams
     */
    public static function create(): CdnOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return CdnOutputListQueryParams
     */
    public function offset(int $offset): CdnOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return CdnOutputListQueryParams
     */
    public function limit(int $limit): CdnOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return CdnOutputListQueryParams
     */
    public function name(string $name): CdnOutputListQueryParams
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
