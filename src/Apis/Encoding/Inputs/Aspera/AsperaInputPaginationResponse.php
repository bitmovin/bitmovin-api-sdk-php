<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Aspera;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AsperaInput;

class AsperaInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AsperaInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AsperaInput::class);
    }
}
