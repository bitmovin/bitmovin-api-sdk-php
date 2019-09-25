<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Filter;

class FilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Filter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Filter::class);
    }
}
