<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\PrewarmedEncoderPools\Schedules;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PrewarmedEncoderPoolScheduleListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PrewarmedEncoderPoolScheduleListQueryParams
     */
    public static function create(): PrewarmedEncoderPoolScheduleListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PrewarmedEncoderPoolScheduleListQueryParams
     */
    public function offset(int $offset): PrewarmedEncoderPoolScheduleListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PrewarmedEncoderPoolScheduleListQueryParams
     */
    public function limit(int $limit): PrewarmedEncoderPoolScheduleListQueryParams
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
