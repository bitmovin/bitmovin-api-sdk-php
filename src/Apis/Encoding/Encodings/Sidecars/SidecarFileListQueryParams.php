<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SidecarFileListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SidecarFileListQueryParams
     */
    public static function create(): SidecarFileListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SidecarFileListQueryParams
     */
    public function offset(int $offset): SidecarFileListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SidecarFileListQueryParams
     */
    public function limit(int $limit): SidecarFileListQueryParams
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
