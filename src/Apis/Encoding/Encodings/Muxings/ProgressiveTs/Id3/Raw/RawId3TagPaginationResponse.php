<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\Raw;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\RawId3Tag;

class RawId3TagPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var RawId3Tag[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, RawId3Tag::class);
    }
}
