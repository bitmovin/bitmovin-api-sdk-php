<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Deinterlace;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DeinterlaceFilter;

class DeinterlaceFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DeinterlaceFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DeinterlaceFilter::class);
    }
}
