<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Sftp;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SftpOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return SftpOutputListQueryParams
     */
    public static function create(): SftpOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SftpOutputListQueryParams
     */
    public function offset(int $offset): SftpOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SftpOutputListQueryParams
     */
    public function limit(int $limit): SftpOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return SftpOutputListQueryParams
     */
    public function name(string $name): SftpOutputListQueryParams
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
