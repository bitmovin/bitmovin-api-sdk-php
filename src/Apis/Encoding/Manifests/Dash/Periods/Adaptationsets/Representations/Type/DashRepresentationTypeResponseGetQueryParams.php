<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Type;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DashRepresentationTypeResponseGetQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashRepresentationTypeResponseGetQueryParams
     */
    public static function create(): DashRepresentationTypeResponseGetQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashRepresentationTypeResponseGetQueryParams
     */
    public function offset(int $offset): DashRepresentationTypeResponseGetQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashRepresentationTypeResponseGetQueryParams
     */
    public function limit(int $limit): DashRepresentationTypeResponseGetQueryParams
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
