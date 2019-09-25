<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Ftp;

use BitmovinApiSdk\Common\QueryParams;

class FtpInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return FtpInputListQueryParams
     */
    public static function create(): FtpInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return FtpInputListQueryParams
     */
    public function offset(int $offset): FtpInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return FtpInputListQueryParams
     */
    public function limit(int $limit): FtpInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return FtpInputListQueryParams
     */
    public function name(string $name): FtpInputListQueryParams
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
