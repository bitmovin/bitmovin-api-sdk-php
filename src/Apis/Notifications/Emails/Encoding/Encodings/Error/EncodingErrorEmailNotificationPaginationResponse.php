<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings\Error;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EncodingErrorEmailNotification;

class EncodingErrorEmailNotificationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EncodingErrorEmailNotification[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EncodingErrorEmailNotification::class);
    }
}
