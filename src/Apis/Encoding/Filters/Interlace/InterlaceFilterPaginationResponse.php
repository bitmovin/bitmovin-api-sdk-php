<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Interlace;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\InterlaceFilter;

class InterlaceFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var InterlaceFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, InterlaceFilter::class);
    }
}
