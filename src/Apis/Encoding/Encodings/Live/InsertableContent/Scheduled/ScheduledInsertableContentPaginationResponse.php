<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\Scheduled;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ScheduledInsertableContent;

class ScheduledInsertableContentPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ScheduledInsertableContent[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ScheduledInsertableContent::class);
    }
}
