<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Labels;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StatisticsPerLabelListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $labels;

    /**
     * @return StatisticsPerLabelListQueryParams
     */
    public static function create(): StatisticsPerLabelListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StatisticsPerLabelListQueryParams
     */
    public function offset(int $offset): StatisticsPerLabelListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StatisticsPerLabelListQueryParams
     */
    public function limit(int $limit): StatisticsPerLabelListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $labels
     * @return StatisticsPerLabelListQueryParams
     */
    public function labels(string $labels): StatisticsPerLabelListQueryParams
    {
        $this->labels = $labels;

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
