<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Vtt;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class VttMediaInfoListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return VttMediaInfoListQueryParams
     */
    public static function create(): VttMediaInfoListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return VttMediaInfoListQueryParams
     */
    public function offset(int $offset): VttMediaInfoListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return VttMediaInfoListQueryParams
     */
    public function limit(int $limit): VttMediaInfoListQueryParams
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
