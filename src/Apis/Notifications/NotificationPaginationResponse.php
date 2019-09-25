<?php

namespace BitmovinApiSdk\Apis\Notifications;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Notification;

class NotificationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Notification[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Notification::class);
    }
}
