<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests;

use BitmovinApiSdk\Common\QueryParams;

class ManifestListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ManifestListQueryParams
     */
    public static function create(): ManifestListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ManifestListQueryParams
     */
    public function offset(int $offset): ManifestListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ManifestListQueryParams
     */
    public function limit(int $limit): ManifestListQueryParams
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
