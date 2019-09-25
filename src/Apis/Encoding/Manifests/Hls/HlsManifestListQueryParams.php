<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls;

use BitmovinApiSdk\Common\QueryParams;

class HlsManifestListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $encodingId;

    /**
     * @return HlsManifestListQueryParams
     */
    public static function create(): HlsManifestListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return HlsManifestListQueryParams
     */
    public function offset(int $offset): HlsManifestListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return HlsManifestListQueryParams
     */
    public function limit(int $limit): HlsManifestListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $encodingId
     * @return HlsManifestListQueryParams
     */
    public function encodingId(string $encodingId): HlsManifestListQueryParams
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
