<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Cmaf;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DashCmafRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashCmafRepresentationListQueryParams
     */
    public static function create(): DashCmafRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashCmafRepresentationListQueryParams
     */
    public function offset(int $offset): DashCmafRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashCmafRepresentationListQueryParams
     */
    public function limit(int $limit): DashCmafRepresentationListQueryParams
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
