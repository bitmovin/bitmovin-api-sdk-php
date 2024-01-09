<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class ManifestListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

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

    /**
     * @param string $sort
     * @return ManifestListQueryParams
     */
    public function sort(string $sort): ManifestListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    public function toArray(): array
    {
        return array_map(function ($value) {
            if($value instanceof Carbon)
            {
                return $value->utc()->toIso8601ZuluString();
            }

            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));
    }
}
