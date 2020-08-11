<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\ChunkedText;

use BitmovinApiSdk\Common\QueryParams;

class DashChunkedTextRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashChunkedTextRepresentationListQueryParams
     */
    public static function create(): DashChunkedTextRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashChunkedTextRepresentationListQueryParams
     */
    public function offset(int $offset): DashChunkedTextRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashChunkedTextRepresentationListQueryParams
     */
    public function limit(int $limit): DashChunkedTextRepresentationListQueryParams
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
