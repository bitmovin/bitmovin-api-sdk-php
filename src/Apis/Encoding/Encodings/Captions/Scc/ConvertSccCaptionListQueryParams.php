<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Captions\Scc;

use BitmovinApiSdk\Common\QueryParams;

class ConvertSccCaptionListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ConvertSccCaptionListQueryParams
     */
    public static function create(): ConvertSccCaptionListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ConvertSccCaptionListQueryParams
     */
    public function offset(int $offset): ConvertSccCaptionListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ConvertSccCaptionListQueryParams
     */
    public function limit(int $limit): ConvertSccCaptionListQueryParams
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
