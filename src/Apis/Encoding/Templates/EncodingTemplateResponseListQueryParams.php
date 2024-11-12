<?php

namespace BitmovinApiSdk\Apis\Encoding\Templates;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;
use \BitmovinApiSdk\Models\EncodingTemplateType;

class EncodingTemplateResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var EncodingTemplateType */
    private $type;

    /**
     * @return EncodingTemplateResponseListQueryParams
     */
    public static function create(): EncodingTemplateResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EncodingTemplateResponseListQueryParams
     */
    public function offset(int $offset): EncodingTemplateResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EncodingTemplateResponseListQueryParams
     */
    public function limit(int $limit): EncodingTemplateResponseListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param EncodingTemplateType $type
     * @return EncodingTemplateResponseListQueryParams
     */
    public function type(EncodingTemplateType $type): EncodingTemplateResponseListQueryParams
    {
        $this->type = $type;

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
