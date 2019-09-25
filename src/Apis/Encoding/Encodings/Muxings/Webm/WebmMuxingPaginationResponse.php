<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\WebmMuxing;

class WebmMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var WebmMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, WebmMuxing::class);
    }
}
