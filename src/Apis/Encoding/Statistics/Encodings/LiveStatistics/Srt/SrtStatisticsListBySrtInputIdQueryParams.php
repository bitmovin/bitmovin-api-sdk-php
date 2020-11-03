<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Srt;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class SrtStatisticsListBySrtInputIdQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SrtStatisticsListBySrtInputIdQueryParams
     */
    public static function create(): SrtStatisticsListBySrtInputIdQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SrtStatisticsListBySrtInputIdQueryParams
     */
    public function offset(int $offset): SrtStatisticsListBySrtInputIdQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SrtStatisticsListBySrtInputIdQueryParams
     */
    public function limit(int $limit): SrtStatisticsListBySrtInputIdQueryParams
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
