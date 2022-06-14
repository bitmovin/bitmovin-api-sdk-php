<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\DirectFileUpload;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DirectFileUploadInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DirectFileUploadInputListQueryParams
     */
    public static function create(): DirectFileUploadInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DirectFileUploadInputListQueryParams
     */
    public function offset(int $offset): DirectFileUploadInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DirectFileUploadInputListQueryParams
     */
    public function limit(int $limit): DirectFileUploadInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DirectFileUploadInputListQueryParams
     */
    public function name(string $name): DirectFileUploadInputListQueryParams
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
