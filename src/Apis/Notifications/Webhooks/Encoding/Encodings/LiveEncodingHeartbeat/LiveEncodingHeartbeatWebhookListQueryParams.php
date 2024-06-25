<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\LiveEncodingHeartbeat;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class LiveEncodingHeartbeatWebhookListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return LiveEncodingHeartbeatWebhookListQueryParams
     */
    public static function create(): LiveEncodingHeartbeatWebhookListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LiveEncodingHeartbeatWebhookListQueryParams
     */
    public function offset(int $offset): LiveEncodingHeartbeatWebhookListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LiveEncodingHeartbeatWebhookListQueryParams
     */
    public function limit(int $limit): LiveEncodingHeartbeatWebhookListQueryParams
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
