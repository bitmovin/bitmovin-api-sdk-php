<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Statistics;

class StatisticsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Statistics[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Statistics::class);
    }
}
