<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\LiveEncodingHeartbeat;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook;

class LiveEncodingHeartbeatWebhookPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var LiveEncodingHeartbeatWebhook[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, LiveEncodingHeartbeatWebhook::class);
    }
}
