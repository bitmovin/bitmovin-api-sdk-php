<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Aws\Regions;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AwsAccountRegionSettingsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AwsAccountRegionSettingsListQueryParams
     */
    public static function create(): AwsAccountRegionSettingsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AwsAccountRegionSettingsListQueryParams
     */
    public function offset(int $offset): AwsAccountRegionSettingsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AwsAccountRegionSettingsListQueryParams
     */
    public function limit(int $limit): AwsAccountRegionSettingsListQueryParams
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
