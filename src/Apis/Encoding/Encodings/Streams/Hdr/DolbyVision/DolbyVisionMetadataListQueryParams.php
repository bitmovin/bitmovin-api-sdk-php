<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Hdr\DolbyVision;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DolbyVisionMetadataListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DolbyVisionMetadataListQueryParams
     */
    public static function create(): DolbyVisionMetadataListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DolbyVisionMetadataListQueryParams
     */
    public function offset(int $offset): DolbyVisionMetadataListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DolbyVisionMetadataListQueryParams
     */
    public function limit(int $limit): DolbyVisionMetadataListQueryParams
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
