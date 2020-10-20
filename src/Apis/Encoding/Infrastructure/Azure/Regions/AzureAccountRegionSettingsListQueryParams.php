<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Azure\Regions;

use BitmovinApiSdk\Common\QueryParams;

class AzureAccountRegionSettingsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AzureAccountRegionSettingsListQueryParams
     */
    public static function create(): AzureAccountRegionSettingsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AzureAccountRegionSettingsListQueryParams
     */
    public function offset(int $offset): AzureAccountRegionSettingsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AzureAccountRegionSettingsListQueryParams
     */
    public function limit(int $limit): AzureAccountRegionSettingsListQueryParams
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
