<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Thumbnails;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Thumbnail;

class ThumbnailPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Thumbnail[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Thumbnail::class);
    }
}
