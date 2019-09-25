<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Text;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\TextFilter;

class TextFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var TextFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, TextFilter::class);
    }
}
