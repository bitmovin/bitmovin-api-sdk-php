<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Ftp;

use BitmovinApiSdk\Common\QueryParams;

class FtpOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return FtpOutputListQueryParams
     */
    public static function create(): FtpOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return FtpOutputListQueryParams
     */
    public function offset(int $offset): FtpOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return FtpOutputListQueryParams
     */
    public function limit(int $limit): FtpOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return FtpOutputListQueryParams
     */
    public function name(string $name): FtpOutputListQueryParams
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
