<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Playready;

use BitmovinApiSdk\Common\QueryParams;

class PlayReadyDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PlayReadyDrmListQueryParams
     */
    public static function create(): PlayReadyDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PlayReadyDrmListQueryParams
     */
    public function offset(int $offset): PlayReadyDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PlayReadyDrmListQueryParams
     */
    public function limit(int $limit): PlayReadyDrmListQueryParams
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
