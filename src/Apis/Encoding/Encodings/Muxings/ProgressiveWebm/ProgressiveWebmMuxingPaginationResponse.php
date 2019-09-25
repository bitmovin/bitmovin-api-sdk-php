<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ProgressiveWebmMuxing;

class ProgressiveWebmMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ProgressiveWebmMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ProgressiveWebmMuxing::class);
    }
}
