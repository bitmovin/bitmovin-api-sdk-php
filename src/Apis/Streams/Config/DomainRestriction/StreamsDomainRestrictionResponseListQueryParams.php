<?php

namespace BitmovinApiSdk\Apis\Streams\Config\DomainRestriction;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class StreamsDomainRestrictionResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return StreamsDomainRestrictionResponseListQueryParams
     */
    public static function create(): StreamsDomainRestrictionResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamsDomainRestrictionResponseListQueryParams
     */
    public function offset(int $offset): StreamsDomainRestrictionResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamsDomainRestrictionResponseListQueryParams
     */
    public function limit(int $limit): StreamsDomainRestrictionResponseListQueryParams
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
