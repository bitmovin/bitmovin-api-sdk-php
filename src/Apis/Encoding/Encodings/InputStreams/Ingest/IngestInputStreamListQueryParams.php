<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Ingest;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class IngestInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return IngestInputStreamListQueryParams
     */
    public static function create(): IngestInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return IngestInputStreamListQueryParams
     */
    public function offset(int $offset): IngestInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return IngestInputStreamListQueryParams
     */
    public function limit(int $limit): IngestInputStreamListQueryParams
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
