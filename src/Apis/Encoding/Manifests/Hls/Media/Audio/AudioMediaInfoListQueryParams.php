<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Audio;

use BitmovinApiSdk\Common\QueryParams;

class AudioMediaInfoListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AudioMediaInfoListQueryParams
     */
    public static function create(): AudioMediaInfoListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AudioMediaInfoListQueryParams
     */
    public function offset(int $offset): AudioMediaInfoListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AudioMediaInfoListQueryParams
     */
    public function limit(int $limit): AudioMediaInfoListQueryParams
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
