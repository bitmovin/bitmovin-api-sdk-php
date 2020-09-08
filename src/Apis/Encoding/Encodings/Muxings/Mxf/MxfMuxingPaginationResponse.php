<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mxf;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\MxfMuxing;

class MxfMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var MxfMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, MxfMuxing::class);
    }
}
