<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\BroadcastTs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\BroadcastTsMuxing;

class BroadcastTsMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var BroadcastTsMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, BroadcastTsMuxing::class);
    }
}
