<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Hls;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class HlsInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return HlsInputListQueryParams
     */
    public static function create(): HlsInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return HlsInputListQueryParams
     */
    public function offset(int $offset): HlsInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return HlsInputListQueryParams
     */
    public function limit(int $limit): HlsInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return HlsInputListQueryParams
     */
    public function name(string $name): HlsInputListQueryParams
    {
        $this->name = $name;

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
