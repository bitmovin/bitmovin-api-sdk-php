<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Webm;

use BitmovinApiSdk\Common\QueryParams;

class DashWebmRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashWebmRepresentationListQueryParams
     */
    public static function create(): DashWebmRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashWebmRepresentationListQueryParams
     */
    public function offset(int $offset): DashWebmRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashWebmRepresentationListQueryParams
     */
    public function limit(int $limit): DashWebmRepresentationListQueryParams
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
