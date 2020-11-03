<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\ClosedCaptions;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class ClosedCaptionsMediaInfoListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return ClosedCaptionsMediaInfoListQueryParams
     */
    public static function create(): ClosedCaptionsMediaInfoListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return ClosedCaptionsMediaInfoListQueryParams
     */
    public function offset(int $offset): ClosedCaptionsMediaInfoListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return ClosedCaptionsMediaInfoListQueryParams
     */
    public function limit(int $limit): ClosedCaptionsMediaInfoListQueryParams
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
