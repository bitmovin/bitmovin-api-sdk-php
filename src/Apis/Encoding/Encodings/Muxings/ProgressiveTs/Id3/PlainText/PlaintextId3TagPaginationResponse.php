<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\PlainText;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PlaintextId3Tag;

class PlaintextId3TagPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PlaintextId3Tag[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PlaintextId3Tag::class);
    }
}
