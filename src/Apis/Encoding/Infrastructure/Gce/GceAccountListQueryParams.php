<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Gce;

use BitmovinApiSdk\Common\QueryParams;

class GceAccountListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return GceAccountListQueryParams
     */
    public static function create(): GceAccountListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GceAccountListQueryParams
     */
    public function offset(int $offset): GceAccountListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GceAccountListQueryParams
     */
    public function limit(int $limit): GceAccountListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}
