<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Id3Tag;

class Id3TagPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Id3Tag[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Id3Tag::class);
    }
}
