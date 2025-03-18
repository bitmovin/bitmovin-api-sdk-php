<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Oci;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class OciAccountListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return OciAccountListQueryParams
     */
    public static function create(): OciAccountListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return OciAccountListQueryParams
     */
    public function offset(int $offset): OciAccountListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return OciAccountListQueryParams
     */
    public function limit(int $limit): OciAccountListQueryParams
    {
        $this->limit = $limit;

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
