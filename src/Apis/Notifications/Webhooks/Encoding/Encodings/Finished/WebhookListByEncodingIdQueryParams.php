<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\Finished;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class WebhookListByEncodingIdQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return WebhookListByEncodingIdQueryParams
     */
    public static function create(): WebhookListByEncodingIdQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return WebhookListByEncodingIdQueryParams
     */
    public function offset(int $offset): WebhookListByEncodingIdQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return WebhookListByEncodingIdQueryParams
     */
    public function limit(int $limit): WebhookListByEncodingIdQueryParams
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
