<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Audio;

use BitmovinApiSdk\Common\QueryParams;

class AudioAdaptationSetListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AudioAdaptationSetListQueryParams
     */
    public static function create(): AudioAdaptationSetListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AudioAdaptationSetListQueryParams
     */
    public function offset(int $offset): AudioAdaptationSetListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AudioAdaptationSetListQueryParams
     */
    public function limit(int $limit): AudioAdaptationSetListQueryParams
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
