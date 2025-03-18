<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Oci\Regions;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class OciAccountRegionSettingsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return OciAccountRegionSettingsListQueryParams
     */
    public static function create(): OciAccountRegionSettingsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return OciAccountRegionSettingsListQueryParams
     */
    public function offset(int $offset): OciAccountRegionSettingsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return OciAccountRegionSettingsListQueryParams
     */
    public function limit(int $limit): OciAccountRegionSettingsListQueryParams
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
