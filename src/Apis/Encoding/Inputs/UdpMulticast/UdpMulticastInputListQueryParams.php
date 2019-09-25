<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\UdpMulticast;

use BitmovinApiSdk\Common\QueryParams;

class UdpMulticastInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return UdpMulticastInputListQueryParams
     */
    public static function create(): UdpMulticastInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return UdpMulticastInputListQueryParams
     */
    public function offset(int $offset): UdpMulticastInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return UdpMulticastInputListQueryParams
     */
    public function limit(int $limit): UdpMulticastInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return UdpMulticastInputListQueryParams
     */
    public function name(string $name): UdpMulticastInputListQueryParams
    {
        $this->name = $name;

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
