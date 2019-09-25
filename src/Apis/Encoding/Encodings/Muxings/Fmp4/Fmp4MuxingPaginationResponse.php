<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Fmp4Muxing;

class Fmp4MuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Fmp4Muxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Fmp4Muxing::class);
    }
}
