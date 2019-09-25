<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveMov;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ProgressiveMovMuxing;

class ProgressiveMovMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ProgressiveMovMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ProgressiveMovMuxing::class);
    }
}
