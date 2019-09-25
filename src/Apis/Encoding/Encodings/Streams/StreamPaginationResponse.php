<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Stream;

class StreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Stream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Stream::class);
    }
}
