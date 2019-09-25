<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\Cea708;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Cea708CaptionInputStream;

class Cea708CaptionInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Cea708CaptionInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Cea708CaptionInputStream::class);
    }
}
