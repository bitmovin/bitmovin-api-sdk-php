<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Results;

use BitmovinApiSdk\Common\QueryParams;

class ObjectDetectionResultListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ObjectDetectionResultListQueryParams
     */
    public static function create(): ObjectDetectionResultListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ObjectDetectionResultListQueryParams
     */
    public function offset(int $offset): ObjectDetectionResultListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ObjectDetectionResultListQueryParams
     */
    public function limit(int $limit): ObjectDetectionResultListQueryParams
    {
        $this->limit = $limit;

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
