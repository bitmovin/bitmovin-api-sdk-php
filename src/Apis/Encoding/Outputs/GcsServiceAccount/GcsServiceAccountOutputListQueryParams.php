<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\GcsServiceAccount;

use BitmovinApiSdk\Common\QueryParams;

class GcsServiceAccountOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return GcsServiceAccountOutputListQueryParams
     */
    public static function create(): GcsServiceAccountOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GcsServiceAccountOutputListQueryParams
     */
    public function offset(int $offset): GcsServiceAccountOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GcsServiceAccountOutputListQueryParams
     */
    public function limit(int $limit): GcsServiceAccountOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return GcsServiceAccountOutputListQueryParams
     */
    public function name(string $name): GcsServiceAccountOutputListQueryParams
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
