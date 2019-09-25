<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Scale;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ScaleFilter;

class ScaleFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ScaleFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ScaleFilter::class);
    }
}
