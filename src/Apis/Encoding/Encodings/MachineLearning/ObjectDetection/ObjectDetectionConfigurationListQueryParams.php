<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class ObjectDetectionConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ObjectDetectionConfigurationListQueryParams
     */
    public static function create(): ObjectDetectionConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ObjectDetectionConfigurationListQueryParams
     */
    public function offset(int $offset): ObjectDetectionConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ObjectDetectionConfigurationListQueryParams
     */
    public function limit(int $limit): ObjectDetectionConfigurationListQueryParams
    {
        $this->limit = $limit;

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
