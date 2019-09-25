<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Cmaf\Drm;

use BitmovinApiSdk\Common\QueryParams;

class DashCmafDrmRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashCmafDrmRepresentationListQueryParams
     */
    public static function create(): DashCmafDrmRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashCmafDrmRepresentationListQueryParams
     */
    public function offset(int $offset): DashCmafDrmRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashCmafDrmRepresentationListQueryParams
     */
    public function limit(int $limit): DashCmafDrmRepresentationListQueryParams
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
