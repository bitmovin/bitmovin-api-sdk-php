<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Subtitle;

use BitmovinApiSdk\Common\QueryParams;

class SubtitleAdaptationSetListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SubtitleAdaptationSetListQueryParams
     */
    public static function create(): SubtitleAdaptationSetListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SubtitleAdaptationSetListQueryParams
     */
    public function offset(int $offset): SubtitleAdaptationSetListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SubtitleAdaptationSetListQueryParams
     */
    public function limit(int $limit): SubtitleAdaptationSetListQueryParams
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
