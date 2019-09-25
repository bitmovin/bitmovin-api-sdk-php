<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Output;

class OutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Output[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Output::class);
    }
}
