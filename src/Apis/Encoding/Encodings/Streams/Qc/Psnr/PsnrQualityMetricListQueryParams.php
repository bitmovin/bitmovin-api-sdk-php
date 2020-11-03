<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Qc\Psnr;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PsnrQualityMetricListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PsnrQualityMetricListQueryParams
     */
    public static function create(): PsnrQualityMetricListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PsnrQualityMetricListQueryParams
     */
    public function offset(int $offset): PsnrQualityMetricListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PsnrQualityMetricListQueryParams
     */
    public function limit(int $limit): PsnrQualityMetricListQueryParams
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
