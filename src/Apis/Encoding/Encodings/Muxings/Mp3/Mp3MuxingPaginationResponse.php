<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Mp3Muxing;

class Mp3MuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Mp3Muxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Mp3Muxing::class);
    }
}
