<?php

namespace BitmovinApiSdk\Apis\Streams\Video;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamsVideoResponse;

class StreamsVideoResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamsVideoResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamsVideoResponse::class);
    }
}
