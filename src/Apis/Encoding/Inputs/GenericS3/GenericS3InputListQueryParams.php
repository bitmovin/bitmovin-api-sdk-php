<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\GenericS3;

use BitmovinApiSdk\Common\QueryParams;

class GenericS3InputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return GenericS3InputListQueryParams
     */
    public static function create(): GenericS3InputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GenericS3InputListQueryParams
     */
    public function offset(int $offset): GenericS3InputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GenericS3InputListQueryParams
     */
    public function limit(int $limit): GenericS3InputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return GenericS3InputListQueryParams
     */
    public function name(string $name): GenericS3InputListQueryParams
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
