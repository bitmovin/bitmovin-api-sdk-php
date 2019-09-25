<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Daily;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DailyStatistics;

class DailyStatisticsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DailyStatistics[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DailyStatistics::class);
    }
}
