<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Labels;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StatisticsPerLabel;

class StatisticsPerLabelPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StatisticsPerLabel[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StatisticsPerLabel::class);
    }
}
