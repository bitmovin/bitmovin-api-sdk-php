<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Sidecar\DolbyVisionMetadataIngest;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DolbyVisionMetadataIngestInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DolbyVisionMetadataIngestInputStreamListQueryParams
     */
    public static function create(): DolbyVisionMetadataIngestInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DolbyVisionMetadataIngestInputStreamListQueryParams
     */
    public function offset(int $offset): DolbyVisionMetadataIngestInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DolbyVisionMetadataIngestInputStreamListQueryParams
     */
    public function limit(int $limit): DolbyVisionMetadataIngestInputStreamListQueryParams
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
