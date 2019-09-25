<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Results\ByTimestamp;

use BitmovinApiSdk\Common\QueryParams;

class ObjectDetectionTimestampResultListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ObjectDetectionTimestampResultListQueryParams
     */
    public static function create(): ObjectDetectionTimestampResultListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ObjectDetectionTimestampResultListQueryParams
     */
    public function offset(int $offset): ObjectDetectionTimestampResultListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ObjectDetectionTimestampResultListQueryParams
     */
    public function limit(int $limit): ObjectDetectionTimestampResultListQueryParams
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
