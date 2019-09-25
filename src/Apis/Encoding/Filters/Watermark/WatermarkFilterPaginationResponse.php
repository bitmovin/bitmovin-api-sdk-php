<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Watermark;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\WatermarkFilter;

class WatermarkFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var WatermarkFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, WatermarkFilter::class);
    }
}
