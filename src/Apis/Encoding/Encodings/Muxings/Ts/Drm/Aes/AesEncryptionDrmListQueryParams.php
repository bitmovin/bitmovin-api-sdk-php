<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts\Drm\Aes;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AesEncryptionDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AesEncryptionDrmListQueryParams
     */
    public static function create(): AesEncryptionDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AesEncryptionDrmListQueryParams
     */
    public function offset(int $offset): AesEncryptionDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AesEncryptionDrmListQueryParams
     */
    public function limit(int $limit): AesEncryptionDrmListQueryParams
    {
        $this->limit = $limit;

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
