<?php

namespace BitmovinApiSdk\Apis\Streams;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\BitmovinStreamResponse;

class BitmovinStreamResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var BitmovinStreamResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, BitmovinStreamResponse::class);
    }
}
