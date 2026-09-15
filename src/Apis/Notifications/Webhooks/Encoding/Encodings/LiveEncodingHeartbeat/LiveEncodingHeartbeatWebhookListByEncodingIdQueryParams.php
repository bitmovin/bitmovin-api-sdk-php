<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\LiveEncodingHeartbeat;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class LiveEncodingHeartbeatWebhookListByEncodingIdQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return LiveEncodingHeartbeatWebhookListByEncodingIdQueryParams
     */
    public static function create(): LiveEncodingHeartbeatWebhookListByEncodingIdQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LiveEncodingHeartbeatWebhookListByEncodingIdQueryParams
     */
    public function offset(int $offset): LiveEncodingHeartbeatWebhookListByEncodingIdQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LiveEncodingHeartbeatWebhookListByEncodingIdQueryParams
     */
    public function limit(int $limit): LiveEncodingHeartbeatWebhookListByEncodingIdQueryParams
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
