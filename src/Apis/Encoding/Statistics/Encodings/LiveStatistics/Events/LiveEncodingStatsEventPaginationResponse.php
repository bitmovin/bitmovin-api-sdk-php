<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Events;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\LiveEncodingStatsEvent;

class LiveEncodingStatsEventPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var LiveEncodingStatsEvent[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, LiveEncodingStatsEvent::class);
    }
}
