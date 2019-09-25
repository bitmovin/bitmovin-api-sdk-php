<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Local;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\LocalOutput;

class LocalOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var LocalOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, LocalOutput::class);
    }
}
