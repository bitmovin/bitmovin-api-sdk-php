<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\SegmentedRaw;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SegmentedRawMuxing;

class SegmentedRawMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SegmentedRawMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SegmentedRawMuxing::class);
    }
}
