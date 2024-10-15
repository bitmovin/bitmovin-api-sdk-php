<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Srt;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SrtToCea608708Caption;

class SrtToCea608708CaptionPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SrtToCea608708Caption[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SrtToCea608708Caption::class);
    }
}
