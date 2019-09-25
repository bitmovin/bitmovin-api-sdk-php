<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Cenc;

use BitmovinApiSdk\Common\QueryParams;

class CencDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return CencDrmListQueryParams
     */
    public static function create(): CencDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return CencDrmListQueryParams
     */
    public function offset(int $offset): CencDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return CencDrmListQueryParams
     */
    public function limit(int $limit): CencDrmListQueryParams
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
