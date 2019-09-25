<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Unsharp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\UnsharpFilter;

class UnsharpFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var UnsharpFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, UnsharpFilter::class);
    }
}
