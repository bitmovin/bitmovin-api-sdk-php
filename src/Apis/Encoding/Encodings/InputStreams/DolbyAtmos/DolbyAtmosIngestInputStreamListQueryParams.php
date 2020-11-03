<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\DolbyAtmos;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DolbyAtmosIngestInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DolbyAtmosIngestInputStreamListQueryParams
     */
    public static function create(): DolbyAtmosIngestInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DolbyAtmosIngestInputStreamListQueryParams
     */
    public function offset(int $offset): DolbyAtmosIngestInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DolbyAtmosIngestInputStreamListQueryParams
     */
    public function limit(int $limit): DolbyAtmosIngestInputStreamListQueryParams
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
