<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3;

use BitmovinApiSdk\Common\QueryParams;

class Id3TagListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return Id3TagListQueryParams
     */
    public static function create(): Id3TagListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return Id3TagListQueryParams
     */
    public function offset(int $offset): Id3TagListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return Id3TagListQueryParams
     */
    public function limit(int $limit): Id3TagListQueryParams
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
