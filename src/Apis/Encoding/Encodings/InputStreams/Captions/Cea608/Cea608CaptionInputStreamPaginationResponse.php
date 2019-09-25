<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\Cea608;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Cea608CaptionInputStream;

class Cea608CaptionInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Cea608CaptionInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Cea608CaptionInputStream::class);
    }
}
