<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Logs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\LiveStandbyPoolEventLog;

class LiveStandbyPoolEventLogPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var LiveStandbyPoolEventLog[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, LiveStandbyPoolEventLog::class);
    }
}
