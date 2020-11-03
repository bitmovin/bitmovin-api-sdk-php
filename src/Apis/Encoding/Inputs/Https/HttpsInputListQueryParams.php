<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Https;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class HttpsInputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return HttpsInputListQueryParams
     */
    public static function create(): HttpsInputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return HttpsInputListQueryParams
     */
    public function offset(int $offset): HttpsInputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return HttpsInputListQueryParams
     */
    public function limit(int $limit): HttpsInputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return HttpsInputListQueryParams
     */
    public function name(string $name): HttpsInputListQueryParams
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
