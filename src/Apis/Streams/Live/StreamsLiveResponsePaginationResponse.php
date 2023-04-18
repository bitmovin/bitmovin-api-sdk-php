<?php

namespace BitmovinApiSdk\Apis\Streams\Live;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamsLiveResponse;

class StreamsLiveResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamsLiveResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamsLiveResponse::class);
    }
}
