<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Muxing;

class MuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Muxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Muxing::class);
    }
}
