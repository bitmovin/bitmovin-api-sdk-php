<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Udp;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class UdpInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return UdpInputListQueryParams
     */
    public static function create(): UdpInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return UdpInputListQueryParams
     */
    public function offset(int $offset): UdpInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return UdpInputListQueryParams
     */
    public function limit(int $limit): UdpInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return UdpInputListQueryParams
     */
    public function name(string $name): UdpInputListQueryParams
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
