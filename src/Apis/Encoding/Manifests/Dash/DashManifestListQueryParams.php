<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DashManifestListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

    /** @var string */
    private $encodingId;

    /**
     * @return DashManifestListQueryParams
     */
    public static function create(): DashManifestListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashManifestListQueryParams
     */
    public function offset(int $offset): DashManifestListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashManifestListQueryParams
     */
    public function limit(int $limit): DashManifestListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return DashManifestListQueryParams
     */
    public function sort(string $sort): DashManifestListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $encodingId
     * @return DashManifestListQueryParams
     */
    public function encodingId(string $encodingId): DashManifestListQueryParams
    {
        $this->encodingId = $encodingId;

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
