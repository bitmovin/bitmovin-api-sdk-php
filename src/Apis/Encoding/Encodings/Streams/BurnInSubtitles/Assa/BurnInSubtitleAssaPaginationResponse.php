<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Assa;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\BurnInSubtitleAssa;

class BurnInSubtitleAssaPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var BurnInSubtitleAssa[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, BurnInSubtitleAssa::class);
    }
}
