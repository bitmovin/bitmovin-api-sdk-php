<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Conform;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ConformFilter;

class ConformFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ConformFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ConformFilter::class);
    }
}
