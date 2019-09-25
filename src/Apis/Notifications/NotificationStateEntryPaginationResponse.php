<?php

namespace BitmovinApiSdk\Apis\Notifications;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\NotificationStateEntry;

class NotificationStateEntryPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var NotificationStateEntry[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, NotificationStateEntry::class);
    }
}
