<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash;

use BitmovinApiSdk\Common\QueryParams;

class DashManifestListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

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
