<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\Error;

use BitmovinApiSdk\Common\QueryParams;

class WebhookListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return WebhookListQueryParams
     */
    public static function create(): WebhookListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return WebhookListQueryParams
     */
    public function offset(int $offset): WebhookListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return WebhookListQueryParams
     */
    public function limit(int $limit): WebhookListQueryParams
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
