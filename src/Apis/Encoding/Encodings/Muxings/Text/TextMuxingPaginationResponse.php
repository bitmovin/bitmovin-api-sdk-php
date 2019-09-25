<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Text;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\TextMuxing;

class TextMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var TextMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, TextMuxing::class);
    }
}
