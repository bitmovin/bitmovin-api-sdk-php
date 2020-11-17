<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\PrewarmedEncoderPools\Schedules;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PrewarmedEncoderPoolListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PrewarmedEncoderPoolListQueryParams
     */
    public static function create(): PrewarmedEncoderPoolListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PrewarmedEncoderPoolListQueryParams
     */
    public function offset(int $offset): PrewarmedEncoderPoolListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PrewarmedEncoderPoolListQueryParams
     */
    public function limit(int $limit): PrewarmedEncoderPoolListQueryParams
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
