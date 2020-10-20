<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EnhancedDeinterlace;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EnhancedDeinterlaceFilter;

class EnhancedDeinterlaceFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EnhancedDeinterlaceFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EnhancedDeinterlaceFilter::class);
    }
}
