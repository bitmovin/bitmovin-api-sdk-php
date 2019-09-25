<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions;

class EmailNotificationWithStreamConditionsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EmailNotificationWithStreamConditions[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EmailNotificationWithStreamConditions::class);
    }
}
