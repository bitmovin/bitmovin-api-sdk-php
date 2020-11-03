<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\GenericS3;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class GenericS3OutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return GenericS3OutputListQueryParams
     */
    public static function create(): GenericS3OutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GenericS3OutputListQueryParams
     */
    public function offset(int $offset): GenericS3OutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GenericS3OutputListQueryParams
     */
    public function limit(int $limit): GenericS3OutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return GenericS3OutputListQueryParams
     */
    public function name(string $name): GenericS3OutputListQueryParams
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
