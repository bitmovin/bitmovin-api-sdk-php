<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Labels\Daily;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DailyStatisticsPerLabel;

class DailyStatisticsPerLabelPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DailyStatisticsPerLabel[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DailyStatisticsPerLabel::class);
    }
}
