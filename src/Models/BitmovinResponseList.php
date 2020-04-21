<?php

namespace BitmovinApiSdk\Models;

use BitmovinApiSdk\Common\ObjectMapper;

class BitmovinResponseList
{
    /** @var BitmovinResponse[] */
    public $items;

    public function __construct($items = null)
    {
        $this->items = ObjectMapper::map($items, BitmovinResponse::class);
    }
}
