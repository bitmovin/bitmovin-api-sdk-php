<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\FrameId;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\FrameIdId3Tag;

class FrameIdId3TagPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var FrameIdId3Tag[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, FrameIdId3Tag::class);
    }
}
