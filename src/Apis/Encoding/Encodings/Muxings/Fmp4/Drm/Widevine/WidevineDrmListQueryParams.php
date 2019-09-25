<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Widevine;

use BitmovinApiSdk\Common\QueryParams;

class WidevineDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return WidevineDrmListQueryParams
     */
    public static function create(): WidevineDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return WidevineDrmListQueryParams
     */
    public function offset(int $offset): WidevineDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return WidevineDrmListQueryParams
     */
    public function limit(int $limit): WidevineDrmListQueryParams
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
