<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Akamai\Regions;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AkamaiAccountRegionSettingsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AkamaiAccountRegionSettingsListQueryParams
     */
    public static function create(): AkamaiAccountRegionSettingsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AkamaiAccountRegionSettingsListQueryParams
     */
    public function offset(int $offset): AkamaiAccountRegionSettingsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AkamaiAccountRegionSettingsListQueryParams
     */
    public function limit(int $limit): AkamaiAccountRegionSettingsListQueryParams
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
