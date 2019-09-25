<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Crop;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CropFilter;

class CropFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CropFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CropFilter::class);
    }
}
