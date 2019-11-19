<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\UsageReports;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EmailNotification;

class EmailNotificationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EmailNotification[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EmailNotification::class);
    }
}
