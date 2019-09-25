<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Mp4Muxing;

class Mp4MuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Mp4Muxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Mp4Muxing::class);
    }
}
