<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\ProgressiveWebm;

use BitmovinApiSdk\Common\QueryParams;

class DashProgressiveWebmRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashProgressiveWebmRepresentationListQueryParams
     */
    public static function create(): DashProgressiveWebmRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashProgressiveWebmRepresentationListQueryParams
     */
    public function offset(int $offset): DashProgressiveWebmRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashProgressiveWebmRepresentationListQueryParams
     */
    public function limit(int $limit): DashProgressiveWebmRepresentationListQueryParams
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
