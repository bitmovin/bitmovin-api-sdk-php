<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiMsl;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AkamaiMslOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AkamaiMslOutputListQueryParams
     */
    public static function create(): AkamaiMslOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AkamaiMslOutputListQueryParams
     */
    public function offset(int $offset): AkamaiMslOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AkamaiMslOutputListQueryParams
     */
    public function limit(int $limit): AkamaiMslOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AkamaiMslOutputListQueryParams
     */
    public function name(string $name): AkamaiMslOutputListQueryParams
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
