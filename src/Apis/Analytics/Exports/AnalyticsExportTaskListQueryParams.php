<?php

namespace BitmovinApiSdk\Apis\Analytics\Exports;

use BitmovinApiSdk\Common\QueryParams;

class AnalyticsExportTaskListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AnalyticsExportTaskListQueryParams
     */
    public static function create(): AnalyticsExportTaskListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AnalyticsExportTaskListQueryParams
     */
    public function offset(int $offset): AnalyticsExportTaskListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AnalyticsExportTaskListQueryParams
     */
    public function limit(int $limit): AnalyticsExportTaskListQueryParams
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
