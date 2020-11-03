<?php

namespace BitmovinApiSdk\Apis\Player\Licenses;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PlayerLicenseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PlayerLicenseListQueryParams
     */
    public static function create(): PlayerLicenseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PlayerLicenseListQueryParams
     */
    public function offset(int $offset): PlayerLicenseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PlayerLicenseListQueryParams
     */
    public function limit(int $limit): PlayerLicenseListQueryParams
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
