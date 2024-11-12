<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Akamai;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AkamaiAccountListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AkamaiAccountListQueryParams
     */
    public static function create(): AkamaiAccountListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AkamaiAccountListQueryParams
     */
    public function offset(int $offset): AkamaiAccountListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AkamaiAccountListQueryParams
     */
    public function limit(int $limit): AkamaiAccountListQueryParams
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
