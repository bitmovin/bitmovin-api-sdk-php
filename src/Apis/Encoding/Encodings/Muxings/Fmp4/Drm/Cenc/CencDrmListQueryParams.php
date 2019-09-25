<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Cenc;

use BitmovinApiSdk\Common\QueryParams;

class CencDrmListQueryParams implements QueryParams
{
    /** @var string */
    private $offset;

    /** @var string */
    private $limit;

    /**
     * @return CencDrmListQueryParams
     */
    public static function create(): CencDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param string $offset
     * @return CencDrmListQueryParams
     */
    public function offset(string $offset): CencDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param string $limit
     * @return CencDrmListQueryParams
     */
    public function limit(string $limit): CencDrmListQueryParams
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
