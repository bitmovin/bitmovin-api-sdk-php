<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf;

use BitmovinApiSdk\Common\QueryParams;

class CmafMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return CmafMuxingListQueryParams
     */
    public static function create(): CmafMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return CmafMuxingListQueryParams
     */
    public function offset(int $offset): CmafMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return CmafMuxingListQueryParams
     */
    public function limit(int $limit): CmafMuxingListQueryParams
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
