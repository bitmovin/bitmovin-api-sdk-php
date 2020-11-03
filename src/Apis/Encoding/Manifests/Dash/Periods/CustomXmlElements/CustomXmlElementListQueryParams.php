<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\CustomXmlElements;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class CustomXmlElementListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return CustomXmlElementListQueryParams
     */
    public static function create(): CustomXmlElementListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return CustomXmlElementListQueryParams
     */
    public function offset(int $offset): CustomXmlElementListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return CustomXmlElementListQueryParams
     */
    public function limit(int $limit): CustomXmlElementListQueryParams
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
