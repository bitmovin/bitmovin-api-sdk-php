<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\TransferError;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Webhook;

class WebhookPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Webhook[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Webhook::class);
    }
}
