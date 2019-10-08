<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Speke;

use BitmovinApiSdk\Common\QueryParams;

class SpekeDrmListQueryParams implements QueryParams
{
    /** @var string */
    private $offset;

    /** @var string */
    private $limit;

    /**
     * @return SpekeDrmListQueryParams
     */
    public static function create(): SpekeDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param string $offset
     * @return SpekeDrmListQueryParams
     */
    public function offset(string $offset): SpekeDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param string $limit
     * @return SpekeDrmListQueryParams
     */
    public function limit(string $limit): SpekeDrmListQueryParams
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
