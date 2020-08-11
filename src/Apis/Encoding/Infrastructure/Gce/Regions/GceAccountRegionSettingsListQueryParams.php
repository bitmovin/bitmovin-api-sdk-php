<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Gce\Regions;

use BitmovinApiSdk\Common\QueryParams;

class GceAccountRegionSettingsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return GceAccountRegionSettingsListQueryParams
     */
    public static function create(): GceAccountRegionSettingsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return GceAccountRegionSettingsListQueryParams
     */
    public function offset(int $offset): GceAccountRegionSettingsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return GceAccountRegionSettingsListQueryParams
     */
    public function limit(int $limit): GceAccountRegionSettingsListQueryParams
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
