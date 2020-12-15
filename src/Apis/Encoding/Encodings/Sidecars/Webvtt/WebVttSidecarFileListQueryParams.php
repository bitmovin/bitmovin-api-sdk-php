<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars\Webvtt;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class WebVttSidecarFileListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return WebVttSidecarFileListQueryParams
     */
    public static function create(): WebVttSidecarFileListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return WebVttSidecarFileListQueryParams
     */
    public function offset(int $offset): WebVttSidecarFileListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return WebVttSidecarFileListQueryParams
     */
    public function limit(int $limit): WebVttSidecarFileListQueryParams
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
