<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ProgressiveTsMuxing;

class ProgressiveTsMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ProgressiveTsMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ProgressiveTsMuxing::class);
    }
}
