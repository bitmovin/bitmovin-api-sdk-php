<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Rotate;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\RotateFilter;

class RotateFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var RotateFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, RotateFilter::class);
    }
}
