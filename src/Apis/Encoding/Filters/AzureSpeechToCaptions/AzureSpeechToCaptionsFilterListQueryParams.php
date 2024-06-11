<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AzureSpeechToCaptions;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AzureSpeechToCaptionsFilterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return AzureSpeechToCaptionsFilterListQueryParams
     */
    public static function create(): AzureSpeechToCaptionsFilterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AzureSpeechToCaptionsFilterListQueryParams
     */
    public function offset(int $offset): AzureSpeechToCaptionsFilterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AzureSpeechToCaptionsFilterListQueryParams
     */
    public function limit(int $limit): AzureSpeechToCaptionsFilterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return AzureSpeechToCaptionsFilterListQueryParams
     */
    public function name(string $name): AzureSpeechToCaptionsFilterListQueryParams
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
