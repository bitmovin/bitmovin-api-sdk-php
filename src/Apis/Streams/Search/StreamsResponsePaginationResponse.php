<?php

namespace BitmovinApiSdk\Apis\Streams\Search;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamsResponse;

class StreamsResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamsResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamsResponse::class);
    }
}
