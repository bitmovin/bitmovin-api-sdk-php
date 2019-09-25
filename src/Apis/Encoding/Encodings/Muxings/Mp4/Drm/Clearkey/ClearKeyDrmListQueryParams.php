<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Clearkey;

use BitmovinApiSdk\Common\QueryParams;

class ClearKeyDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ClearKeyDrmListQueryParams
     */
    public static function create(): ClearKeyDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ClearKeyDrmListQueryParams
     */
    public function offset(int $offset): ClearKeyDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ClearKeyDrmListQueryParams
     */
    public function limit(int $limit): ClearKeyDrmListQueryParams
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
