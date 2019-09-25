<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\TsMuxing;

class TsMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var TsMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, TsMuxing::class);
    }
}
