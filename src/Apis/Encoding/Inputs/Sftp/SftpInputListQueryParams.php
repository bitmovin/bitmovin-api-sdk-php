<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Sftp;

use BitmovinApiSdk\Common\QueryParams;

class SftpInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return SftpInputListQueryParams
     */
    public static function create(): SftpInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SftpInputListQueryParams
     */
    public function offset(int $offset): SftpInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SftpInputListQueryParams
     */
    public function limit(int $limit): SftpInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return SftpInputListQueryParams
     */
    public function name(string $name): SftpInputListQueryParams
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
