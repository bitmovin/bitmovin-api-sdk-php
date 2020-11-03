<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Tcp;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class TcpInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return TcpInputListQueryParams
     */
    public static function create(): TcpInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return TcpInputListQueryParams
     */
    public function offset(int $offset): TcpInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return TcpInputListQueryParams
     */
    public function limit(int $limit): TcpInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return TcpInputListQueryParams
     */
    public function name(string $name): TcpInputListQueryParams
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
