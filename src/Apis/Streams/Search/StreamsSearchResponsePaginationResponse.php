<?php

namespace BitmovinApiSdk\Apis\Streams\Search;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamsSearchResponse;

class StreamsSearchResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamsSearchResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamsSearchResponse::class);
    }
}
