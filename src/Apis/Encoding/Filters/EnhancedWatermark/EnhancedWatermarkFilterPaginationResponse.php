<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EnhancedWatermark;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EnhancedWatermarkFilter;

class EnhancedWatermarkFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EnhancedWatermarkFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EnhancedWatermarkFilter::class);
    }
}
