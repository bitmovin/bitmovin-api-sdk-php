<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ChunkedText;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ChunkedTextMuxing;

class ChunkedTextMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ChunkedTextMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ChunkedTextMuxing::class);
    }
}
